@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Suppliers</h1>  
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add Supplier</a>  
    <table class="table">  
        <thead>  
            <tr>  
                <th>ID</th>  
                <th>Name</th>  
                <th>Contact Person</th>  
                <th>Phone</th>  
                <th>Email</th>  
                <th>Address</th>  
                <th>Actions</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach ($suppliers as $supplier)  
            <tr>  
                <td>{{ $supplier->id }}</td>  
                <td>{{ $supplier->name }}</td>  
                <td>{{ $supplier->contact_person }}</td>  
                <td>{{ $supplier->phone }}</td>  
                <td>{{ $supplier->email }}</td>  
                <td>{{ $supplier->address }}</td>  
                <td>  
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning">Edit</a>  
                    <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display:inline;">  
                        @csrf  
                        @method('DELETE')  
                        <button type="submit" class="btn btn-danger">Delete</button>  
                    </form>  
                </td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection  
