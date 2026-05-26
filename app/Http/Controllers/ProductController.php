<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->back();
    }
}