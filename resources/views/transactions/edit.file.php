@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Edit Penjualan</h1>  
  
    <form action="{{ route('sales.update', $sale) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="mb-3">  
            <label for="customer_id" class="form-label">Pelanggan</label>  
            <select class="form-select" id="customer_id" name="customer_id" required>  
                <option value="">Pilih Pelanggan</option>  
                @foreach ($customers as $customer)  
                    <option value="{{ $customer->id }}" {{ $customer->id == $sale->customer_id ? 'selected' : '' }}>  
                        {{ $customer->name }}  
                    </option>  
                @endforeach  
            </select>  
        </div>  
        <div class="mb-3">  
            <label for="total_price" class="form-label">Total Harga</label>  
            <input type="number" class="form-control" id="total_price" name="total_price" value="{{ $sale->total_price }}" required>  
        </div>  
        <div class="mb-3">  
            <label for="sale_date" class="form-label">Tanggal Penjualan</label>  
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $sale->sale_date }}" required>  
        </div>  
        <button type="submit" class="btn btn-primary">Update</button>  
    </form>  
</div>  
@endsection  
