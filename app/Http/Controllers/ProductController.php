<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
     public function index(){
        $data = Product::get();
        return view('index' ,compact('data'));
    }
    public function show_Product($id){

        $product = Product::find($id);
        return view('show_Product', compact('product'));
    }
}
