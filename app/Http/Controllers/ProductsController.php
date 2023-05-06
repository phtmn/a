<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        return view('/products.index',['products'=>$products]);
    }


    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $product = new Product;


        $product->title = $request->title;
        $product->description = $request->description;
        $product->intention = $request->intention;

        $product->save();

        return view('products.create');
    }


    public function edit($id){

        $product = Product::findOrFail('id');

        return view('/products.edit',['product'=>$product]);
    }
}
