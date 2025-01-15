@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Edit Data Keuangan</h1>  
  
    <form action="{{ route('finances.update', $finance) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="mb-3">  
            <label for="description" class="form-label">Deskripsi</label>  
            <input type="text" class="form-control" id="description" name="description" value="{{ $finance->description }}" required>  
        </div>  
        <div class="mb-3">  
            <label for="amount" class="form-label">Jumlah</label>  
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $finance->amount }}" step="0.01" required>  
        </div>  
        <div class="mb-3">  
            <label for="type" class="form-label">Tipe</label>  
            <select class="form-select" id="type" name="type" required>  
                <option value="income" {{ $finance->type == 'income' ? 'selected' : '' }}>Pemasukan</option>  
                <option value="expense" {{ $finance->type == 'expense' ? 'selected' : '' }}>Pengeluaran</option>  
            </select>  
        </div>  
        <div class="mb-3">  
            <label for="transaction_date" class="form-label">Tanggal Transaksi</label>  
            <input type="date" class="form-control" id="transaction_date" name="transaction_date" value="{{ $finance->transaction_date->format('Y-m-d') }}" required>  
        </div>  
        <button type="submit" class="btn btn-primary">Update</button>  
    </form>  
</div>  
@endsection  
