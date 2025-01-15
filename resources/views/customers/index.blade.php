@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1 class="mb-4">Manajemen Pelanggan</h1>  
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>  
  
    @if (session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @endif  
  
    <div class="table-responsive">  
        <table class="table table-striped table-bordered">  
            <thead class="table-dark">  
                <tr>  
                    <th>ID Pelanggan</th>  
                    <th>Nama Pelanggan</th>  
                    <th>Nomor Telepon</th>  
                    <th>Alamat</th>  
                    <th>Status Keanggotaan</th>  
                    <th>Kedaluwarsa Keanggotaan</th>  
                    <th>Total Poin</th>  
                    <th>Aksi</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach ($customers as $customer)  
                    <tr>  
                        <td>{{ $customer->customer_id }}</td>  
                        <td>{{ $customer->customer_name }}</td>  
                        <td>{{ $customer->phone_number }}</td>  
                        <td>{{ $customer->address }}</td>  
                        <td>{{ $customer->membership_status }}</td>  
                        <td>{{ $customer->membership_expiry ? $customer->membership_expiry->format('d-m-Y') : 'N/A' }}</td>  
                        <td>{{ $customer->total_points }}</td>  
                        <td>  
                            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning">Edit</a>  
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;">  
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
