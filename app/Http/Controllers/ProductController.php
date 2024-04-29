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
          'products' => Product::with('category')->orderBy('id', 'desc')->get(),

        ]);
    }

        public function show(Product $product){
        return view('admin.products.productForm',[
            'categories' => Category::all(),
              'product' =>$product
        ]);
    }

        public function shop (Product $product){
        return view ('user.shop',[
            // 'products' => $product// Corrected eager loading
                'products' => Product::with('category')->get(), // Corrected eager loading
        ]);
    }

      public function add (){
        return view ('admin.products.productAdd',[
            'categories' => Category::all()
        ]);
    }

     public function store(Request $request)
    {
        // return $request->file('picture')->store('products-images');
             dd($request->file('picture'));
        $validatedData = $request->validate([
            'product_name' => 'required',
            'stock' => 'required',
            'product_desc' => 'required',
            'picture' => 'image|file|max:1024',
            'category_id' => 'required',
        ]);

        $validatedData['picture']= $request->file('picture')->store('post-images');

        Product::create($validatedData);

        return redirect('/products')->with('success', 'Products saved successfully!');

    }

    public function destroy($id)
    {
        $transaction = Product::findOrFail($id);
        $transaction->delete();

        return redirect('/products')->with('successDelete', 'Produk telah dihapus');
    }

     public function update(Request $request, Product $product)
{
    
    $product = Product::find($request->id);
    //  dd($request->file('picture'));


    $validatedData = $request->validate([
        'product_name' => 'required',
        'stock' => 'required',
        'product_desc' => 'required',
        'picture' => 'image|file|max:1024',
        'category_id' => 'required',
    ]);

    if ($request->file('picture')) {
        $validatedData['picture'] = $request->file('picture')->store('post-images');
    }

    $product->update($validatedData);
    return redirect('/products')->with('successUpdate', 'Product changed successfully!');

}
}
