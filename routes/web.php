<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Models\Product;

// Login & Register User
Route::get('/',[AuthController::class, 'index'] );
Route::post('/login',[AuthController::class, 'login'] );
Route::get('/register',[AuthController::class, 'register'] );
Route::post('/register',[AuthController::class, 'store'] );

// Login & Register Admin
Route::get('/loginAdmin',[AdminController::class, 'index'] );
Route::get('/registerAdmin',[AdminController::class, 'register'] );
Route::post('/registerAdmin',[AdminController::class, 'store'] );

// Admin
Route::get('/about', function () {
    return view('admin/index');
});



// Category
Route::get('/categories',[CategoryController::class, 'index'] );
Route::get('/category/{category}',[CategoryController::class, 'show'] );
Route::get('/categoryAdd',[CategoryController::class, 'add'] );
Route::post('/saveCategory',[CategoryController::class, 'store'] );
Route::post('/updateCategory',[CategoryController::class, 'update'] );
Route::get('/deleteCategory/{category}',[CategoryController::class, 'destroy'] );


// Product
Route::get('/product/{product}',[ProductController::class, 'show'] );
Route::get('/products',[ProductController::class, 'index'] );
Route::get('/productAdd',[ProductController::class, 'add'] );
Route::post('/saveProduct',[ProductController::class, 'store'] );
Route::get('/deleteProduct/{product}',[ProductController::class, 'destroy'] );
Route::post('/updateProduct',[ProductController::class, 'update'] );

// User
Route::get('/shop',[ProductController::class, 'shop'] );

// Transaction
Route::get('/buy/{product}',[TransactionController::class, 'buy'] );
Route::post('/invoice',[TransactionController::class, 'invoice'] );





