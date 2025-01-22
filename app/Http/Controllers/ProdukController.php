<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index() {
        $produk = [
            ['nama' => 'RTX 3060 12GB', 'harga' => 3100000, 'gambar' => 'rtx.webp'],
            ['nama' => 'AMD Ryzen 5 5600G', 'harga' => 1600000, 'gambar' => 'cu.jpg'],
            ['nama' => 'ASUS ROG STRIX Z790-E GAMING WIFI', 'harga' => 4000000, 'gambar' => 'mobo.png'],
            ['nama' => 'ASUS ROG STRIX Z790-E GAMING WIFI', 'harga' => 4000000, 'gambar' => 'ram_adata.webp'],
        ];
        $produk2 = [
            ['nama' => 'Vga Card', 'harga' => 1000000, 'gambar' => 'rtx.webp'],
            ['nama' => 'CPU', 'harga' => 500000, 'gambar' => 'cu.jpg'],
            ['nama' => 'Motherboard', 'harga' => 200000, 'gambar' => 'mobo.png'],
        ];
        return view('produk', compact('produk', 'produk2'));
    }
}
