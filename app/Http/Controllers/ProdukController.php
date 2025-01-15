<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index() {
        $produk = [
            ['nama' => 'Monitor', 'harga' => 1000000, 'gambar' => '3060.jpg'],
            ['nama' => 'Keyboard', 'harga' => 500000, 'gambar' => 'ryzen.png'],
            ['nama' => 'Mouse', 'harga' => 200000, 'gambar' => '3060.jpg'],
        ];
        return view('produk', compact('produk'));
    }
}
