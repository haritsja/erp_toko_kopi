@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Edit Supplier</h1>  
    <form action="{{ route('suppliers.update', $supplier) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="form-group">  
            <label for="name">Name</label>  
            <input type="text" name="name" class="form-control" value="{{ $supplier->name }}" required>  
        </div>  
        <div class="form-group">  
            <label for="contact_person">Contact Person</label>  
            <input type="text" name="contact_person" class="form-control" value="{{ $supplier->contact_person }}">  
        </div>  
        <div class="form-group">  
            <label for="phone">Phone</label>  
            <input type="text" name="phone" class="form-control" value="{{ $supplier->phone }}">  
        </div>  
        <div class="form-group">  
            <label for="email">Email</label>  
            <input type="email" name="email" class="form-control" value="{{ $supplier->email }}">  
        </div>  
        <div class="form-group">  
            <label for="address">Address</label>  
            <textarea name="address" class="form-control">{{ $supplier->address }}</textarea>  
        </div>  
        <button type="submit" class="btn btn-primary">Update</button>  
    </form>  
</div>  
@endsection  
