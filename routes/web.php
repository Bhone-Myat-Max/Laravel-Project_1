<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

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

Route::get('/Category', [CategoryController::class, 'index'])->name('categories.back');

Route::get('/Category/{id}', [CategoryController::class, 'show'])->name('categories.show');
