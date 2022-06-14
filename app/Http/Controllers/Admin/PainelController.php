<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
       return view('admin.index');
    }

    public function orders()
    {
       return view('admin.orders');
    }
    public function products()
    {
        return view('admin.products');
    }

}
