@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1 class="mb-4">Manajemen Transaksi</h1>  
    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>  
  
    @if (session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @endif  
  
    <div class="table-responsive">  
        <table class="table table-striped table-bordered">  
            <thead class="table-dark">  
                <tr>  
                    <th>ID Transaksi</th>  
                    <th>Pelanggan</th>  
                    <th>Total Harga</th>  
                    <th>Tanggal Transaksi</th>  
                    <th>Aksi</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($transactions as $transaction)  
                    <tr>  
                        <td>{{ $transaction->transaction_id }}</td>  
                        <td>{{ $transaction->customer->name }}</td>  
                        <td>Rp {{ number_format($transaction->total_price, 2, ',', '.') }}</td>  
                        <td>{{ $transaction->sale_date }}</td>  
                        <td>  
                            <a href="{{ route('transactions.edit', $transaction) }}" class="btn btn-warning">Edit</a>  
                            <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" style="display:inline;">  
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
