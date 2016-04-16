<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(){
        $products= Product::all();
          return view('product')->with('products',$products);
//        echo 'Hello';
    }
    public function add(Request $request){

        $new_product=new Product();
        $new_product->name=$request->input('product_name');
        $new_product->cost_price=$request->input('cost_price');
        $new_product->sale_price=$request->input('sale_price');
        $new_product->description=$request->input('description');
        $new_product->save();
        return view('product')->with('products',Product::all());
    }
}
