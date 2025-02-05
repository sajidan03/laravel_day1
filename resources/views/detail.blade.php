@extends('template')
@section('title')
    Produk Detail
@endsection
@section('content')
<div class="container p-5 mt-5 d-flex align-items-center justify-content-center">
    <div class="row mt-3">
        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{ asset('assets/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" height="400px">
        </div>
        <div class="col-md-5">
            <h4 class="card-title">{{ $product->name }}</h4>
            <h3 class="card-text">Rp. {{ number_format($product->price, 0, ',', '.') }}</h3>
            <ul class="nav nav-tabs mt-4">
                <li class="nav-item">
                    <a href="#detail" class="nav-link active" data-bs-toggle="tab">Detail</a>
                </li>
                <li class="nav-item">
                    <a href="#spesifikasi" class="nav-link" data-bs-toggle="tab">Spesifikasi</a>
                </li>
                <li class="nav-item">
                    <a href="#info" class="nav-link" data-bs-toggle="tab">Informasi</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="detail">
                    {{-- <pre>
AMD Ryzen 5 5600 adalah prosesor desktop dengan 6 inti yang menggunakan arsitektur Zen 3 (Vermeer). Prosesor ini dirilis pada bulan April 2022.
Berikut adalah spesifikasi AMD Ryzen 5 5600:
Soket CPU AM4
Base clock 3.5 GHz
Max boost clock up to 4.4 GHz
L1 cache 384 KB
L2 cache 3 MB
L3 cache 32 MB
Default TDP 65 W
Unlocked for overclocking
Max operating temperature (Tjmax) 90°C
AMD Ryzen 5 5600 mendukung sistem operasi Windows 10 dan Windows 11 versi 64-bit, RHEL x86 64-bit, dan Ubuntu x86 64-bit.
                    </pre> --}}
                </div>
                <div class="tab-pane fade" id="spesifikasi">
                    <pre>Konten spesifikasi</pre>
                </div>
                <div class="tab-pane fade" id="info">
                    <pre>Konten informasi</pre>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-block justify-content-center border border-1 p-4 h-100">
            <h5>Atur jumlah dan catatan</h5>
            <div class="row d-flex d-flex justify-content-between">
                <div class="col-md-12 d-flex justify-content-between">
                   <input type="number" name="" id="" style="width: 100px; border-radius: 5px; border: solid grey 2px">
                    <label for="">Sisa Total: 97</label>
            </div>
            <div class="row">
                <div class="col">
                    <p>Subtotal</p>
                </div>
                <div class="col-md-7">
                    <h4>Rp. 100.000</h4>
                </div>
            </div>
            <div class="row mt-2">
                <button class="btn btn-success">
                    + Keranjang
                </button>
            </div>
            <div class="row mt-2">
                <button class="btn border border-success border-2">
                    <a href="" style="text-decoration: none; color: green">Beli</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
