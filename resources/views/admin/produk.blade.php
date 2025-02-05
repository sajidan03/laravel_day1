@extends('admin.template')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h4>Data product</h4>
        <a href="{{ route('product-create') }}" class="btn btn-sm btn-primary">Add new</a>
    </div>
    {{-- @if (Storage::get('success') !== null)
        <div class="alert alert-success">
            {{ Storage::get('success'); }}
        </div>
    @endif --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ substr($item->desc, 0, 20) }}</td>
                <td><img src="{{ asset('assets/' .$item->image) }}"alt="" width="100px"></td>
                <td>{{ $item->category->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </div>
</table>
@endsection
