@extends('template')
@section('content')
    <div class="container pt-5">
        <div class="mt-4 p-5 text-white text-center rounded" style="background-color: var(--color-main)">
        <h1>Selamat datang di toko kami</h1>
        <p>Temukan game game menarik dari toko kami</p>
      </div>
    <div class="container mt-4">
        <h4>Produk terbaru</h4>
    <div class="d-flex gap-4 justify-content-between flex-wrap">
    @foreach ( $produk as $item )
    <div class="card" style="width:400px">
        <img src="{{ asset('assets/'.$item['gambar']) }}" class="card-img-top" alt="Card image" height="400px">
        <div class="card-body">
          <h4 class="card-title">{{ $item['nama']}}</h4>
          <p class="card-text">Rp. {{ number_format($item['harga'], 0, ',', '.')}}</p>
        <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
      @endforeach
    </div>
</div>
<div class="container mt-4">
    <h4>Produk terlaris</h4>
    <div class="d-flex gap-4 justify-between flex-wrap">
    @foreach ($produk2 as $item)
    <div class="card" style="width:400px">
        <img src="{{ asset('assets/'.$item['gambar']) }}" class="card-img-top" alt="Card image" height="400px">
        <div class="card-body">
          <h4 class="card-title">{{ $item['nama']}}</h4>
          <p class="card-text">Rp. {{ number_format($item['harga'], 0, ',', '.')}}</p>
        <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
      @endforeach
    </div>
    </div>
</div>
</div>
@endsection
