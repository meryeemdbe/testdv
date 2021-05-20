<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories' ,[App\Http\Controllers\CategoryController::class, 'index'] )->name('categories'); 
Route::name('add_category')->get('/add-category' ,[App\Http\Controllers\CategoryController::class, 'create'] ); 
Route::post('/categories' ,[App\Http\Controllers\CategoryController::class, 'store'] )->name('store_cat');
Route::name('category')->get('/category/{id}',  [App\Http\Controllers\CategoryController::class, 'show']  );

Route::name('edit_category')->get('/category/{id}/edit' , [App\Http\Controllers\CategoryController::class, 'edit'] );
Route::name('update_category')->put('/category/{id}' , [App\Http\Controllers\CategoryController::class, 'update'] );
Route::name('delete_category')->delete('/category/{id}' , [App\Http\Controllers\CategoryController::class, 'destroy']  );



Route::get('/products' ,[App\Http\Controllers\ProductController::class, 'index'] )->name('products'); 
Route::name('add-product')->get('/add-product' ,[App\Http\Controllers\ProductController::class, 'create'] ); 
Route::name('store_product')->post('/products' ,[App\Http\Controllers\ProductController::class, 'store'] );
Route::name('product')->get('/product/{id}',  [App\Http\Controllers\ProductController::class, 'show']  );
Route::name('edit_product')->get('/product/{id}/edit' , [App\Http\Controllers\ProductController::class, 'edit'] );
Route::name('update_product')->put('/product/{id}' , [App\Http\Controllers\ProductController::class, 'update'] );
Route::name('delete_product')->delete('/product/{id}' , [App\Http\Controllers\ProductController::class, 'destroy']  );
