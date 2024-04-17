<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
        public function index(){
        return view('admin.products.products',[
            // 'products' => Product::all(),
              'products' => Product::with('category')->get(), // Corrected eager loading
        ]);
    }

        public function show(Product $product){
        return view('admin.products.productForm',[
            'categories' => Category::all(),
              'product' =>$product
        ]);
    }

        public function shop (Product $product){
        return view ('public.shop',[
            // 'products' => $product// Corrected eager loading
                'products' => Product::with('category')->get(), // Corrected eager loading
        ]);
    }
}
