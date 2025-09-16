<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $products = Product::inRandomOrder()->take(100)->get();
        return view('home', ['products' => $products]);
    }

    public function aanbod() {
        return view('aanbod');
    }

    public function recent() {
        return view('recent');
    }
}
