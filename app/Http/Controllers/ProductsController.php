<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return response()->json([
            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|min:2',
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:10',
            'picture' => 'required|string|min:20',
            'price' => 'numeric',
            'stock' => 'nullable|numeric',
        ]);

        $product = Product::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }
}
