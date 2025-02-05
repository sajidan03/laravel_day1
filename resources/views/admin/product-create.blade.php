@extends('admin.template')
@section('content')
<div class="container mt-4">
    <h4>Add new product</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('product-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name product:</label>
      <input type="text" class="form-control" id="name" placeholder="Input name" name="name">
    </div>
    <div class="mb-3 mt-3">
        <label for="pwd" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" placeholder="Harga" name="price">
      </div>
      <div class="mb-3 mt-3">
        <label for="desc" class="form-label">Description</label>
        <textarea name="desc" id="description" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="mb-3 mt-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
      </div>
      <div class="mb-3 mt-3">
        <label for="categories_id" class="form-label">Kategori</label>
        <select name="categories_id" id="categories_id">
            @foreach ($category as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
      </div>
    <input type="submit" value="Simpan" class="form-control btn btn-primary">
  </form>
</div>
@endsection
