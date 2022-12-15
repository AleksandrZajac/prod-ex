<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(Request $request)
    {
//        dump($request);
//        dump($request->session()->all());
        return view('page.index');
    }
}
