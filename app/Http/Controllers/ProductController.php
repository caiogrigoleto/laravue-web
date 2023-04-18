<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return ProductResource::collection(auth()->user()->products);
    }

    public function store(ProductStoreRequest $request)
    {
        $input = $request->validated();

        $product = auth()->user()->products()->create($input);

        return new ProductResource($product);
    }

    public function update(Product $product, ProductStoreRequest $request)
    {
        $input = $request->validated();

        $product->fill($input);
        $product->save();

        return new ProductResource($product->fresh());
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }
}
