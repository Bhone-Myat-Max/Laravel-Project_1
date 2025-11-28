<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // public function value() {

    //     $category=[
    //         [
    //             'id'=> 1,
    //             'name'=> 'Vegetable',
    //         ],
    //         [
    //             'id'=> 2,
    //             'name'=> 'Fruit',
    //         ],
    //         [
    //             'id'=> 3,
    //             'name'=> 'Meat',
    //         ],
    //         [
    //             'id'=> 4,
    //             'name'=> 'Juice',
    //         ],
    //         [
    //             'id'=> 5,
    //             'name'=> 'Snacks',
    //         ]
    //     ];
    //     return view('index', compact('category'));
    // }

    public function index(){
        $data = Category::get();
        return view('index' ,compact('data'));
    }
    public function show($id){

        $category = Category::find($id);
        return view('show', compact('category'));
    }
}
