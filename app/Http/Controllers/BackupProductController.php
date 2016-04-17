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
        return view('products')->with('products',$products);
//        echo 'Hello';
    }
    public function add(Request $request){

        $new_product=new Product();
        $new_product->name=$request->input('product_name');
        $new_product->cost_price=$request->input('cost_price');
        $new_product->sale_price=$request->input('sale_price');
        $new_product->description=$request->input('description');
        $new_product->save();
        return view('products')->with('products',Product::all());
    }
    public function delete(){
        $product=new Product();
        $product->destroy(4,5,6);
        //        $product->delete();


        echo 'hlong';
        return view('/products')->with('products',$product->all());
    }
    public function store(){
        $product = new Product();
        $product->name='Banana';
        $product->cost_price='20';
        $product->sale_price='50';
        $product->save();
        return view('products')->with('products',$product->all());
    }
}
