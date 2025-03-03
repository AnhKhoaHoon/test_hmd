<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        $product= Product::create($data);
        return response()->json($product, 201);

    }
}
