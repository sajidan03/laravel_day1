<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use App\Models\Category;
class ProdukController extends Controller
{
    //
    public function index() {
        // $produk = [
        //     ['nama' => 'RTX 3060 12GB', 'harga' => 3100000, 'gambar' => 'rtx.webp'],
        //     ['nama' => 'AMD Ryzen 5 5600G', 'harga' => 1600000, 'gambar' => 'cu.jpg'],
        //     ['nama' => 'ASUS ROG STRIX Z790-E GAMING WIFI', 'harga' => 4000000, 'gambar' => 'mobo.png'],
        //     ['nama' => 'ASUS ROG STRIX Z790-E GAMING WIFI', 'harga' => 4000000, 'gambar' => 'ram_adata.webp'],
        // ];
        // $produk2 = [
        //     ['nama' => 'Vga Card', 'harga' => 1000000, 'gambar' => 'rtx.webp'],
        //     ['nama' => 'CPU', 'harga' => 500000, 'gambar' => 'cu.jpg'],
        //     ['nama' => 'Motherboard', 'harga' => 200000, 'gambar' => 'mobo.png'],
        // ];
        // $produk = Product::orderBy('created_at', 'desc')->get();
        // dd($category[0]->product);
        $category = Category::all();
        $produk = Product::orderBy('created_at', 'desc')->get();
        return view('produk', compact('produk', 'category'));
    }
    public function detail() {
        return view('detail');
    }
    public function show($id){
        $product = Product::findOrFail($id);
        return view('detail', compact('product'));
    }
    public function product() {
        $data['product'] = Product::orderBy('created_at', 'desc')->get();
        return view('admin.produk', $data);
    }
    public function create() {
        $data['category'] = Category::all();
        return view('admin.product-create', $data);
    }
    public function store(Request $request) {
        $validation = $request->validate([
            'name' => 'required|max:50|string',
            'price' => 'required|numeric|min:0',
            'desc' => 'required|string',
            'categories' => 'required',
        ]);
        $validation['image'] = '-';
        Product::create($validation);
        //
        // Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'desc' => $request->descriptions,
        //     'image' => '-',
        //     'categories_id' => $request->categories_id,
        // ]);

        // return redirect()->back();
        return redirect('admin/product')->with('Successs', 'Data produk berhasil disimpan');
    }
}
