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

    public function update(Request $request, Category $category)
    {

        $category = Category::find($request->id);

        dd($category);

        if (!$category) {
            // Handle case where Category with given ID is not found
            return false;
        }
    
        $category->update($request->all());

      return redirect('/categories')->with('successUpdate', 'Category changed successfully!');

    }

       public function destroy( $id)
    {
        $transaction = Category::findOrFail($id);
        $transaction->delete();

        return redirect('/categories')->with('successDelete', 'Category telah dihapus');
    }
}
