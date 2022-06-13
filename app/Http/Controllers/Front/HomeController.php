<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function lance()
    {
        return view('front.produto-lance');
    }
    public function allProducts()
    {
        return view('front.all-products');
    }
}
