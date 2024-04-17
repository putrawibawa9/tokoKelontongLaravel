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
        return view ('admin.categories.categoryAdd',[
            'category' => $category
        ]);
    }
    public function add (){
        return view ('admin.categories.categoryAdd');
    }

     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required',
        ]);

        Category::create($validatedData);

        return redirect('/categories')->with('success', 'Transaction saved successfully!');

    }
}
