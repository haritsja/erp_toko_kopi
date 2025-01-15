@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1 class="mb-4">Manajemen Keuangan</h1>  
    <a href="{{ route('finances.create') }}" class="btn btn-primary mb-3">Tambah Data Keuangan</a>  
  
    @if (session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @endif  
  
    <div class="table-responsive">  
        <table class="table table-striped table-bordered">  
            <thead class="table-dark">  
                <tr>  
                    <th>ID</th>  
                    <th>Deskripsi</th>  
                    <th>Jumlah</th>  
                    <th>Tipe</th>  
                    <th>Tanggal Transaksi</th>  
                    <th>Aksi</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($finances as $finance)  
                    <tr>  
                        <td>{{ $finance->finance_id }}</td>  
                        <td>{{ $finance->description }}</td>  
                        <td>Rp {{ number_format($finance->amount, 2, ',', '.') }}</td>  
                        <td>{{ ucfirst($finance->type) }}</td>  
                        <td>{{ $finance->transaction_date->format('d-m-Y') }}</td>  
                        <td>  
                            <a href="{{ route('finances.edit', $finance) }}" class="btn btn-warning">Edit</a>  
                            <form action="{{ route('finances.destroy', $finance) }}" method="POST" style="display:inline;">  
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
