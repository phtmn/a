<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index(){

        $search = request('search');

        if($search){
            $products = Product::where([
                ['user_id','like','%'.$search.'%']])->get();
        }else{
            $products = Product::all();
        }



        return view('welcome',['products'=>$products,'search'=>$search]);
    }


    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $product = new Product;


        $product->user_id = $request->user_id;
        $product->title = $request->title;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->description = $request->description;
        $product->regulation = $request->regulation;
        $product->comission = $request->comission;



        $product->save();

        return redirect ('/')->with('msg','Lista inserida com sucesso!');
    }

    public function show($id){

        $product = Product::findOrFail($id);

        return view('products.show',['product'=>$product]);
    }


    public function destroy($id){

        $product = Product::findOrFail($id)->delete();

        return redirect('/')->with('msg2','Evento excluido com sucesso !');
    }

    public function edit($id){

        $product = Product::findOrFail($id);

        return view('products.edit',['product'=> $product]);
    }

    public function update(Request $request){

        $product = Product::findOrFail($request ->id)->update($request->all());


        return redirect ('/')->with('msg1','Lista editada com sucesso!');
    }

}
