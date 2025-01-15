@extends('layouts.app')      
      
@section('content')      
<div class="container">      
    <h1>Tambah Produk</h1>      
      
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">      
        @csrf      
        <div class="mb-3">      
            <label for="product_name" class="form-label">Nama Produk</label>      
            <input type="text" class="form-control" id="product_name" name="product_name" required>      
        </div>      
        <div class="mb-3">      
            <label for="description" class="form-label">Deskripsi</label>      
            <textarea class="form-control" id="description" name="description"></textarea>      
        </div>      
        <div class="mb-3">      
            <label for="price" class="form-label">Harga</label>      
            <input type="number" class="form-control" id="price" name="price" required>      
        </div>      
        <div class="mb-3">      
            <label for="stock" class="form-label">Stok</label>      
            <input type="number" class="form-control" id="stock" name="stock" required>      
        </div>      
        <div class="mb-3">      
            <label for="category" class="form-label">Kategori</label>      
            <input type="text" class="form-control" id="category" name="category">      
        </div>      
        <div class="mb-3">      
            <label for="image" class="form-label">Gambar Produk</label>      
            <input type="file" class="form-control" id="image" name="image">      
        </div>      
        <button type="submit" class="btn btn-primary">Simpan</button>      
    </form>      
</div>      
@endsection      
