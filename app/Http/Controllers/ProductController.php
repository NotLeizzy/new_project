<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //display
    public function index()
    
    {
        $product = Product::all();
        return view ('products.index', ['items' => $product]);
    }
    //insert
    public function store(Request $request)
    {
       Product::create([
        'name' => $request->name123,
        'price' => $request->price123
       ]);

    return redirect('/products');
    }
    //update
    public function edit ($id)
    {
        $product = Product::findOrFail($id);
        return view ('products.edit',[
            'item' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $product->update([
            'name' => $request->name123,
            'price' => $request->price123
        ]) ; 
        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); 
        
        return redirect('/products');
    }
}