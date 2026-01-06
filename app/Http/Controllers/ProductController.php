<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\Product\ProductRepositoryInterface;


class ProductController extends Controller
{


    protected $ProductRepository;
        public function __construct(ProductRepositoryInterface $ProductRepository){
        $this-> ProductRepository = $ProductRepository;
    }

    # List funtion
    public function index(){
        $data = $this-> ProductRepository->index();
        return view('Products.index' ,compact('data'));
    }

    # show funtion
    public function show($id){

        $product = $this-> ProductRepository->show($id);
        return view('Products.show_Product', compact('product'));
    }

    # edit funtion
    public function edit($id){
        $product = $this-> ProductRepository->show($id);
        $categories = Category::all();

        return view('products.edit', compact('product','categories'));
    }

    # update funtion
    public function update(ProductUpdateRequest $request){

        $product = $this-> ProductRepository->show($request->id);
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'status'=>$request->has('status') ? true : false,
        ]);
        return redirect()->route('product.index');
    }

    # create funtion
    public function create(){
         $category = Category::get();
        return view('products.create' , compact('category'));
    }

    # add funtion
    public function add(ProductStoreRequest $request){

        if($request->hasFile('image')){
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('ProductImages'), $imageName);
        }

        Product::create([
            'category_id'=>$request->category_id,
            'name'=> $request->name,
            'price'=> $request->price,
            'description'=> $request->description,
            'image'=> $imageName,
            'status'=> $request->has('status') ? true : false,

        ]);
        return redirect()->route('product.index');

    }

    # delete funtion
    public function delete($id){
        $product = $this-> ProductRepository->show($id);
        $product->delete();

        return redirect()->route('product.index');
    }



}
