<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\images;


class HomeController extends Controller
{
 
  public function search(Request $request){
    $search = $request->input('query');
    $product = Product::where('productname', 'LIKE', '%'.$search.'%')
            ->get();

    return view ('search_product')->with(compact('product'));
}
public function news()
{
  return view('news');
  
}
}
