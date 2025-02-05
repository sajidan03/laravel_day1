<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index() {
        // $produk = Product::orderBy('created_at','desc')->limit(3)->get();
        return view('home');
    }

}
