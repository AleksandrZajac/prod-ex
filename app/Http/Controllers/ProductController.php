<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('page.categories');
    }

    public function show()
    {
        return view('page.product-details');
    }
}
