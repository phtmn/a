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


        $product->user_id = $request->user_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->regulation = $request->regulation;
        $product->comission = $request->comission;

        $product->save();

        return view('products.create');
    }


    public function edit($id){

        $product = Product::findOrFail('id');

        return view('/products.edit',['product'=>$product]);
    }
}
