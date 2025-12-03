<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Http\Requests\CategoryUpdateRrequest;


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
        return view('Categories.index' ,compact('data'));
    }




    // dd

    public function edit($id){
        $category = Category::find($id);
        return view('Categories.edit', compact('category'));
    }


    public function update(CategoryUpdateRrequest $request){
        // dd($request->all);
         $category = Category::find($request->id);
         $category ->update([
            'name'=>$request->name,
         ]);
         return redirect()->route('categories.index');
    }

    public function create(){
        // dd(here);
        return view('Categories.create');
    }


    public function store(Request $request){
        $validedData= $request->validate([
            'name'=> 'required|string',
            'image'=> 'required',
        ]);
        if($request->hasFile('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('categoryImages'), $imageName);
            $validedData = array_merge($validedData, ['image' => $imageName]);
        }

        Category::create($validedData);
        return redirect()->route('categories.index');
        // dd($request);
    }

    public function delete($id){
        // dd($id);
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }



}
