@extends('template')
@section('content')
<div class="container pt-5">
    <div class="mt-4 p-5 text-white text-center rounded" style="background-color: var(--color-main)">
        <h1>Selamat datang di toko kami</h1>
        <p>Temukan komponen komputer di toko kami dengan harga terjangkau!</p>
    </div>

    <!-- Nav pills -->
    <ul class="nav nav-pills justify-content-center gap-4 mt-4">
        @foreach ($category as $key => $item)
            <li class="nav-item">
                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="pill" href="#kategori{{ $item->id }}">
                    {{ $item->name }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach ($category as $key => $item)
            <div class="tab-pane container {{ ($key==0)? 'active' : '' }}" id="kategori{{ $item->id }}">
                <div class="d-flex gap-3 w-100 container mt-4">
                        @foreach ($item->product as $item)
                            <div class="card" style="width:auto">
                                <img src="{{ asset('assets/'.$item->image) }}" class="card-img-top" alt="Card image" height="400px">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $item->name }}</h4>
                                    {{-- <p>Nama kategori: {{ $product->category->name }}</p>0 --}}
                                    <p class="card-text">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                                    <a href="{{ route('detail') }}" class="btn btn-primary">Beli</a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        @endforeach
    </div>

    {{-- Uncomment if needed --}}
    {{--
    <div class="container mt-4">
        <h4>Produk terlaris</h4>
        <div class="d-flex gap-4 justify-content-between flex-wrap">
            @foreach ($produk2 as $item)
                <div class="card" style="width:400px">
                    <img src="{{ asset('assets/' . $item['gambar']) }}" class="card-img-top" alt="Card image" height="400px">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item['nama'] }}</h4>
                        <p class="card-text">Rp. {{ number_format($item['harga'], 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    --}}
</div>
@endsection
