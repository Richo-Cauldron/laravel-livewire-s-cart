<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Product list
     *
     * @return view
     */
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    /**
     * Show individual product
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        return view('product.show')->with('product', $product);
    }
}
