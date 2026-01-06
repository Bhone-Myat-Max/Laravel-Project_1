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

    # List funtion
    public function index(){
        $data = $this->CategoryRepository->index();
        return view('Categories.index' ,compact('data'));
    }


    # edit funtion
    public function edit($id){
        $category = Category::find($id);
        return view('Categories.edit', compact('category'));
    }


    # update funtion
    public function update(CategoryUpdateRrequest $request){
        // dd($request->all);
         $category = Category::find($request->id);
         $category ->update([
            'name'=>$request->name,
         ]);
         return redirect()->route('categories.index');
    }

    # create funtion
    public function create(){
        return view('Categories.create');
    }


    # store funtion
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

    }

    # delete funtion
    public function delete($id){
        $category = $this->CategoryRepository->delete($id);
        $category->delete();

        return redirect()->route('categories.index');
    }



}
