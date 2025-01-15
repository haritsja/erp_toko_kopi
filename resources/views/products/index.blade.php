@extends('layouts.app')        
        
@section('content')        
<div class="container mt-5">        
    <h1 class="mb-4">Manajemen Produk</h1>        
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>        
        
    @if (session('success'))        
        <div class="alert alert-success">{{ session('success') }}</div>        
    @endif        
        
    <div class="table-responsive">        
        <table class="table table-striped table-bordered">        
            <thead class="table-dark">        
                <tr>        
                    <th>ID</th>        
                    <th>Gambar</th>    
                    <th>Nama</th>        
                    <th>Deskripsi</th>        
                    <th>Harga</th>        
                    <th>Stok</th>        
                    <th>Kategori</th>        
                    <th>Aksi</th>        
                </tr>        
            </thead>        
            <tbody>        
                @foreach ($products as $product)        
                    <tr>        
                        <td>{{ $product->product_id }}</td> <!-- Ganti 'id' dengan 'product_id' -->  
                        <td>    
                            @if($product->image)    
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" style="width: 50px; height: auto;">    
                            @else    
                                <span>Tidak ada gambar</span>    
                            @endif    
                        </td>        
                        <td>{{ $product->product_name }}</td> <!-- Ganti 'name' dengan 'product_name' -->  
                        <td>{{ $product->description }}</td>        
                        <td>Rp {{ number_format($product->price, 2, ',', '.') }}</td>        
                        <td>{{ $product->stock }}</td>        
                        <td>{{ $product->category }}</td>        
                        <td>        
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>        
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">        
                                @csrf        
                                @method('DELETE')        
                                <button type="submit" class="btn btn-danger">Hapus</button>        
                            </form>        
                        </td>        
                    </tr>        
                @endforeach        
            </tbody>        
        </table>        
    </div>        
</div>        
@endsection        
