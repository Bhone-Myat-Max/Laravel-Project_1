<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Requests\ProductStoreRequest;


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

    public function update(ProductUpdateRequest $request){
        // $ValidData = $request->validate([
        //     'name'=> "required|string",
        //     'price'=> "required|integer",
        //     'description'=> "required|string",


        // ]);
        // dd($ValidData->all());
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


      public function add(ProductStoreRequest $request){

        // dd($request->all());
        // $validedData= $request->validate([
        //     'name'=> 'required|string',
        //     'price'=> "required|integer",
        //     'description'=> "required|string",
        //     'image'=> 'required',
        // ]);
        if($request->hasFile('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('ProductImages'), $imageName);
            $validedData = array_merge($validedData, ['image' => $imageName]);
        }

        Product::create($request);
        return redirect()->route('product.index');

    }

    // public function add(Request $request){

    //    dd($request->all);
    //     Product::create(
    //         [
    //             'name'=>$request->name,
    //             'price'=>$request->price,
    //             'description'=>$request->description,
    //         ]);

    //         return redirect()->route('product.index');

    // }

    public function delete($id){
        // dd($id);
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index');
    }



}
