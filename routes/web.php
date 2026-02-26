<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


//Stataic Route

Route::get('/blogs', function () {
    return "This is blog";
});

//Dynamic Route
Route::get('/blogs/{id}', function ($id) {
    return "This is Blog Detail=> $id";
});


// Naming Route

Route::get('/dashboard', function (){
    return "Hello world";
})->name('Dashboard.ttp');


//Redirect Route

Route::get('/ttp', function() {
    return redirect()->route('Dashboard.ttp');
});

//Group Route

Route::prefix('/backend')->group(function(){
    Route::get('/admin', function(){
        return "Hello This is admin route";
    })->name('admin');

    Route::get('/user', function(){
        return" Hello, I'm user";
    })->name('user');

    Route::get('/product/{id}', function($id){
        return "This prouduct => $id";
    })->name('product');

    Route::get('/Supplier', function(){
        return redirect()->route('Dashboard.ttp');
    })->name('supplier');


});

// Route::get('/articles', function(){
//     return view('index');
// })->name('article');


Route::get('/articles', [ArticleController::class, 'index']);
// Category
Route::get('/Category', [CategoryController::class, 'index'])->name('categories.index');



Route::get('/Category/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

Route::post('/Category/{id}/update', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/Category/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/Category/store', [CategoryController::class, 'store'])->name('categories.store');














//product
Route::get('/Product', [ProductController::class, 'index'])->name('product.back');

Route::get('/Product/{id}', [ProductController::class, 'show_Product'])->name('products.show');

// Route::('')

