<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryUpdateRrequest;
use App\Repositories\Category\CategoryRepositoryInterface;


class CategoryController extends Controller
{
        protected $CategoryRepository;
        public function __construct(CategoryRepositoryInterface $CategoryRepository){
        $this-> CategoryRepository = $CategoryRepository;
    }

    public function index(){
        $data = $this->CategoryRepository->index();
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

        $this->CategoryRepository->store($validedData);
        return redirect()->route('categories.index');
        // dd($request->all);
    }

    public function delete($id){
        // dd($id);
        $category = $this->CategoryRepository->delete($id);
        $category->delete();

        return redirect()->route('categories.index');
    }



}
