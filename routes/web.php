<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


// Login & Register
Route::get('/',[AuthController::class, 'index'] );
Route::post('/login',[AuthController::class, 'login'] );
Route::get('/register',[AuthController::class, 'register'] );
Route::post('/register',[AuthController::class, 'store'] );


// Admin
Route::get('/about', function () {
    return view('admin/index');
});

// Category
Route::get('/categories',[CategoryController::class, 'index'] );
Route::get('/category/{category}',[CategoryController::class, 'show'] );
Route::get('/categoryAdd',[CategoryController::class, 'add'] );
Route::post('/saveCategory',[CategoryController::class, 'store'] );


// Product
Route::get('/product/{product}',[ProductController::class, 'show'] );
Route::get('/products',[ProductController::class, 'index'] );
Route::get('/products',[ProductController::class, 'index'] );

// User
Route::get('/shop',[ProductController::class, 'shop'] );

