<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponserTrait;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    use ApiResponserTrait;

    public function index()
    {
       return $this->successResponse(ProductResource::collection(Product::all()));
    }

    public function show(Product $product)
    {
        return $this->successResponse(new ProductResource($product));
    }
}
