<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductFormController extends Controller
{
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
{
    
    $product_name = $request->product_name;
    $price        = $request->price;
    $quantity     = $request->quantity;
    $category     = $request->category;
    $description  = $request->description;

    
    return view('formform', compact('product_name', 'price', 'quantity', 'category', 'description'));
}
}
