<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;

class TransactionController extends Controller
{
    
    public function buy($product){
        return view('user.buy',[
            'id' => $product
        ]);
    }

    public function invoice( Request $request){
        $product = Product::find($request->product_id);
        $sisa = $product->stock-$request->jumlah;

        if($sisa<0){
             return redirect('/shop')->with('error', 'Products saved successfully!');
        }
        $transaction = Transaction::create($request->all());
        
        
        $product->update([
            'stock' => $product->stock-$request->jumlah
        ]);
        
        $detail = Transaction::select(
            'transactions.*', 'products.product_name'
        )->join(
            'products', 'transactions.product_id', '=', 'products.id'
        )->where(
            'transactions.id', '=', $transaction->id
        )->first();
        return view('user.invoice',[
            'transaction' => $transaction,
            'detail' => $detail
        ]);
    }


}
