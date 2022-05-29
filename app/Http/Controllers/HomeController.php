<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('customer.home' , compact('products'));
    }

    
}
