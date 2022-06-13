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

    public function bid()
    {

        return view('front.product-bid');
    }
    public function allProducts()
    {
        return view('front.all-products');
    }
    public function auctionBought()
    {
       return view('front.auction-bought');
    }
}
