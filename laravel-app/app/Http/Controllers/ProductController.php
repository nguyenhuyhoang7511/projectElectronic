<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    // get all product
    public function getProducts()
    {
        $product = ProductResource::collection(Product::all());
        return $product;
    }

    // get details product
    public function show($id)
    {
        $product = ProductResource::collection(Product::findOrFail($id));
        dd($product);
        return $this->sendResponse($product);
    }

    // create product
    public function store(ProductRequest $request)
    {
        $this->auth()->create($request->all());
        return $this->sendResponse('Create success');
    }
}
