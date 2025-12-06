<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::post('/Category/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');












//product
Route::get('/Product', [ProductController::class, 'index'])->name('product.index');

Route::get('/Product/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');

Route::get('/Product/{id}/show',[ProductController::class, 'show'])->name('products.show');

Route::post('/Products/{id}/update',[ProductController::class, 'update'])->name('products.update');

Route::get('/Product/create', [ProductController::class, 'create'])->name('products.create');

Route::post('Product/add', [ProductController::class, 'add'])->name('products.add');

Route::post('Product/{id}/delete' ,[ProductController::class, 'delete'])->name('products.delete');








//User
Route::get('/User', [UserController::class, 'list'])->name('users.list');
Route::post('/User/{id}/delete', [UserController::class, 'delete'])->name('users.delete');
Route::get('/User/create', [UserController::class, 'create'])->name('users.create');
Route::post('/User/store', [UserController::class, 'store'])->name('users.store');
