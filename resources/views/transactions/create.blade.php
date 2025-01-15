@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Tambah Penjualan</h1>  
  
    <form action="{{ route('sales.store') }}" method="POST">  
        @csrf  
        <div class="mb-3">  
            <label for="customer_id" class="form-label">Pelanggan</label>  
            <select class="form-select" id="customer_id" name="customer_id" required>  
                <option value="">Pilih Pelanggan</option>  
                @foreach ($customers as $customer)  
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>  
                @endforeach  
            </select>  
        </div>  
        <div class="mb-3">  
            <label for="total_price" class="form-label">Total Harga</label>  
            <input type="number" class="form-control" id="total_price" name="total_price" required>  
        </div>  
        <div class="mb-3">  
            <label for="sale_date" class="form-label">Tanggal Penjualan</label>  
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>  
        </div>  
        <button type="submit" class="btn btn-primary">Simpan</button>  
    </form>  
</div>  
@endsection  
