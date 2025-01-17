<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index() {
        $produk = [
            ['nama' => 'Vga Card', 'harga' => 1000000, 'gambar' => 'rtx.webp'],
            ['nama' => 'CPU', 'harga' => 500000, 'gambar' => 'cu.jpg'],
            ['nama' => 'Motherboard', 'harga' => 200000, 'gambar' => 'mobo.png'],
        ];
        $produk2 = [
            ['nama' => 'Vga Card', 'harga' => 1000000, 'gambar' => 'rtx.webp'],
            ['nama' => 'CPU', 'harga' => 500000, 'gambar' => 'cu.jpg'],
            ['nama' => 'Motherboard', 'harga' => 200000, 'gambar' => 'mobo.png'],
        ];
        return view('produk', compact('produk', 'produk2'));
    }
}
