<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
     public function index(){
        $data = Product::get();
        return view('Products.index' ,compact('data'));
    }
    public function show($id){

        $product = Product::find($id);
        return view('Products.show_Product', compact('product'));
    }



    public function edit($id){
        $product =Product::find($id);
        return view('Products.edit', compact('product'));
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            // dd

        ]);
        //  dd($request->all);
        return redirect()->route('product.index');

    }

    public function create(){
        return view('Products.create');
    }

    public function add(Request $request){
        Product::create(
            [
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
            ]);

            return redirect()->route('product.index');

    }

    public function delete($id){
        // dd($id);
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('categories.index');
    }



}
