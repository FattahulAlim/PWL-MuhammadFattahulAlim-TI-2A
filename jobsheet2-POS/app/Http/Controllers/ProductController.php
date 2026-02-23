<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category($jenis){
        return view('products', ['category' => $jenis]);
    }
}
