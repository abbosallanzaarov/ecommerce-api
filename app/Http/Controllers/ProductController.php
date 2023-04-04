<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductsResourse;

class ProductController extends Controller
{

    public function index()
    {
        return ProductsResourse::collection(Product::cursorPaginate(20));
    }
    public function store(StoreProductRequest $request)
    {
        //
    }

    public function show(Product $product)
    {
        return $product->with('stocks')->find($product->id);
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
