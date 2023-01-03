<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();

        return view('pages.products.index', compact('product'));
    }

    public function addProductpage() {
        return view('pages.products.addProduct');
    }

    public function addProduct(Request $request) {
        $validation = $request->validate([
            'product' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'desc' => 'required',
        ]);

        $product = Product::create([
            'product_code' => mt_rand(000000, 999999),
            'product_name' => $validation['product'],
            'price' => $validation['price'],
            'qty' => $validation['qty'],
            'desc' => $validation['desc'],
        ]);
        $product->save();

        return redirect()->route('product.index');
    }

    public function deleteProduct($id) {
        Product::findOrFail($id)->delete();

        return redirect()->back();
    }
}
