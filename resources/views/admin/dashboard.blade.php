@extends('admin.template')
@section('content')
<div class="container mt-4">
    <h4>Dashboard</h4>
    <div class="d-flex gap-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0">Data product</h5>
            </div>
            <div class="card-body">
                Jumlah: {{ $product->count(); }}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0">Data member</h5>
            </div>
            <div class="card-body">
                Jumlah: {{ $member->count(); }}
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title m-0">Data kategori</h5>
            </div>
            <div class="card-body">
                Jumlah: {{ $category->count(); }}
            </div>
        </div>
    </div>
</div>
@endsection
