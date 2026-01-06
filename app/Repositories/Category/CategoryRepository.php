<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface
{

        public function index(){
            return Category::get();
        }

        public function store($validedData){
            return Category::create($validedData);
        }
        public function delete($id){
            return Category::find($id);
        }


}
