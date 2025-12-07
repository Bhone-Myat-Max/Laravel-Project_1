<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;


class ProductRepository implements ProductRepositoryInterface
{

        public function index(){
            return Product::with('category')->get();
        }

         public function show($id){
            return Product::find($id);
         }


        // public function store($validedData){
        //     return Product::create($validedData);
        // }
        // public function delete($id){
        //     return Product::find($id);
        // }


}
