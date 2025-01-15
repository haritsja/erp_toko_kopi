@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Edit Pelanggan</h1>  
  
    <form action="{{ route('customers.update', $customer) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="mb-3">  
            <label for="customer_name" class="form-label">Nama Pelanggan</label>  
            <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $customer->customer_name }}" required>  
        </div>  
        <div class="mb-3">  
            <label for="phone_number" class="form-label">Nomor Telepon</label>  
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $customer->phone_number }}">  
        </div>  
        <div class="mb-3">  
            <label for="address" class="form-label">Alamat</label>  
            <textarea class="form-control" id="address" name="address">{{ $customer->address }}</textarea>  
        </div>  
        <div class="mb-3">  
            <label for="membership_status" class="form-label">Status Keanggotaan</label>  
            <input type="text" class="form-control" id="membership_status" name="membership_status" value="{{ $customer->membership_status }}">  
        </div>  
        <div class="mb-3">  
            <label for="membership_expiry" class="form-label">Kedaluwarsa Keanggotaan</label>  
            <input type="date" class="form-control" id="membership_expiry" name="membership_expiry" value="{{ $customer->membership_expiry ? $customer->membership_expiry->format('Y-m-d') : '' }}">  
        </div>  
        <div class="mb-3">  
            <label for="total_points" class="form-label">Total Poin</label>  
            <input type="number" class="form-control" id="total_points" name="total_points" value="{{ $customer->total_points }}">  
        </div>  
        <button type="submit" class="btn btn-primary">Update</button>  
    </form>  
</div>  
@endsection  
