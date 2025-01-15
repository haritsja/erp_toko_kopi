@extends('layouts.app')      
      
@section('content')      
<div class="container">      
    <h1>Edit Produk</h1>      
      
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">      
        @csrf      
        @method('PUT')      
        <div class="mb-3">      
            <label for="product_name" class="form-label">Nama Produk</label>      
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>      
        </div>      
        <div class="mb-3">      
            <label for="description" class="form-label">Deskripsi</label>      
            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>      
        </div>      
        <div class="mb-3">      
            <label for="price" class="form-label">Harga</label>      
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>      
        </div>      
        <div class="mb-3">      
            <label for="stock" class="form-label">Stok</label>      
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>      
        </div>      
        <div class="mb-3">      
            <label for="category" class="form-label">Kategori</label>      
            <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">      
        </div>      
        <div class="mb-3">      
            <label for="image" class="form-label">Gambar Produk</label>      
            <input type="file" class="form-control" id="image" name="image">      
            @if($product->image)      
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" style="width: 100px; height: auto;">      
            @endif      
        </div>      
        <button type="submit" class="btn btn-primary">Update</button>      
    </form>      
</div>      
@endsection      
