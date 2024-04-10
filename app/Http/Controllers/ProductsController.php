<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products,
        ]);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }
}
