@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Add Supplier</h1>  
    <form action="{{ route('suppliers.store') }}" method="POST">  
        @csrf  
        <div class="form-group">  
            <label for="name">Name</label>  
            <input type="text" name="name" class="form-control" required>  
        </div>  
        <div class="form-group">  
            <label for="contact_person">Contact Person</label>  
            <input type="text" name="contact_person" class="form-control">  
        </div>  
        <div class="form-group">  
            <label for="phone">Phone</label>  
            <input type="text" name="phone" class="form-control">  
        </div>  
        <div class="form-group">  
            <label for="email">Email</label>  
            <input type="email" name="email" class="form-control">  
        </div>  
        <div class="form-group">  
            <label for="address">Address</label>  
            <textarea name="address" class="form-control"></textarea>  
        </div>  
        <button type="submit" class="btn btn-primary">Save</button>  
    </form>  
</div>  
@endsection  
