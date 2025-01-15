@extends('template')
@section('title')
Beranda
@endsection
@section('content')
<div class="container">
    <h3>Selamat datang, {{ $nama }} ({{ $level }})</h3>
</div>
@endsection
