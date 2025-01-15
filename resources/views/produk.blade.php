@extends('template')
@section('content')
    <div class="container p-4">
    <h3 style="text-align: center">Produk kami</h3>
    <br>
    <div class="d-flex gap-3">
    @foreach ( $produk as $item )
    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{ asset('assets/'.$item['gambar']) }}" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">{{ $item['nama']}}</h4>
          <p class="card-text">{{ $item['harga']}}</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
