<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
     public function index(){
        return view('admin.categories.categories',[
            'categories' => Category::all()
        ]);
    }

    public function show (Category $category){
        return view ('admin.categories.categoryForm',[
            'category' => $category
        ]);
    }
}
