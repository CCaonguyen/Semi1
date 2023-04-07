<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\image;


class HomeController extends Controller
{
 
  public function search(Request $request)
  {

    $search = $request->keyword;

    $product= product::query()
    ->where('productname','LIKE',"%{$search}%")
    ->orwhere('productid','LIKE',"%{$search}%")
    ->get();
    return view('product', compact('Product'),['sucmessage'=>'Search results for'.$search]);
  }
public function news()
{
  return view('news');
  
}
}
