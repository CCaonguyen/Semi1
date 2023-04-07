<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\size;
use App\Models\color;
use App\Models\category;

use App\Models\OrderDetail;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Auth;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        $product = Product::All();
        return view('product', compact("product"));
    }

    public function getAllAdminProduct()
    {
        $product = Product::All();
        return view('admin.admin-product', compact("product"));
    }

    // public function getAllAdminProduct()
    // {

    //     $product = DB::table('product')
    //         ->join('category', 'product.category', '=', 'category.categoryID')
    //         ->join('color', 'product.color', '=', 'color.colorID')
    //         ->join('size', 'product.size', '=', 'size.sizeID')
    //         ->select('product.*','category.category','color.color')
    //         ->get();
    //     return view('admin.admin-product', ['product' => $product]);
    // }

    public function addProduct(Request $request)
    {
        $product = new product;
        $product->productID = $request->productID;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->colorID = $request->colorID;
        $product->sizeID = $request->sizeID;
        $product->images = $request->images;
        $product->categoryID = $request->categoryID;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin-product');
    }

    public function Detail($productid)
    {
        $data = Product::find($productid);
        return view('detail',['data' => $data]);

    }

    public function DeleteProduct($productid)
    {
        $product = Product::find($productid);
        $product->delete();
        return back();
    }

    public function addToCart($productid)
    {
        $product = Product::find($productid);

        Cart::add([
            'id' => $productid,
            'name' => $product->productname,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'img' => $product->images,
                'color' => $product->colorID,
                'size' => $product->sizeID,
                'category' => $product->categoryID,
            ]
        ]);

        $content = Cart::content();

        return redirect()->route('cart')->with('alert-success', 'Thêm sản phẩm '.$product->name.' vào giỏ hàng thành công!');
    }

    // Xóa sản phẩm trỏng giỏ
    public function delProductCart($id){
        Cart::remove($id);
        return redirect()->back()->with('alert-success', 'Xoá sản phẩm trong giỏ thành công!');
    }

    // Sửa sản phẩm trong giỏ
    public function updateProductCart(Request $request, $rowid){
        Cart::update($rowid, $request->qty);
        return redirect()->back()->with('alert-success', 'Xoá sản phẩm trong giỏ thành công!');
    }

    // đặt hàng
    public function order()
    {
        try {
            DB::beginTransaction();

            $carts = Cart::content();
            $total = Cart::priceTotal(0, ',', '');

            $create_order = Order::create([
                'code' => 'DH',
                'user_id' => Auth::id(),
                'status' => 0,
                'total_money' => $total,
            ]);

            $create_order->update([
                'code' => 'DH'.str_pad($create_order->id, 6, '0', STR_PAD_LEFT)
            ]);

            foreach ($carts as $cart) {
                OrderDetail::create([
                    'order_id' => $create_order->id,
                    'product_id' => $cart->id,
                    'amount' => $cart->qty,
                    'price' => $cart->price,
                    'total_money' => $cart->qty * $cart->price,
                ]);
            }

            Cart::destroy();
            
            DB::commit();
            return redirect()->route('index')->with('alert-success','Đặt hàng thành công!');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with('alert-error','Đặt hàng thất bại!');
        }
    }
}
