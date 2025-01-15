@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Tambah Pelanggan</h1>  
  
    <form action="{{ route('customers.store') }}" method="POST">  
        @csrf  
        <div class="mb-3">  
            <label for="customer_name" class="form-label">Nama Pelanggan</label>  
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>  
        </div>  
        <div class="mb-3">  
            <label for="phone_number" class="form-label">Nomor Telepon</label>  
            <input type="text" class="form-control" id="phone_number" name="phone_number">  
        </div>  
        <div class="mb-3">  
            <label for="address" class="form-label">Alamat</label>  
            <textarea class="form-control" id="address" name="address"></textarea>  
        </div>  
        <div class="mb-3">  
            <label for="membership_status" class="form-label">Status Keanggotaan</label>  
            <input type="text" class="form-control" id="membership_status" name="membership_status">  
        </div>  
        <div class="mb-3">  
            <label for="membership_expiry" class="form-label">Kedaluwarsa Keanggotaan</label>  
            <input type="date" class="form-control" id="membership_expiry" name="membership_expiry">  
        </div>  
        <div class="mb-3">  
            <label for="total_points" class="form-label">Total Poin</label>  
            <input type="number" class="form-control" id="total_points" name="total_points" value="0">  
        </div>  
        <button type="submit" class="btn btn-primary">Simpan</button>  
    </form>  
</div>  
@endsection  
