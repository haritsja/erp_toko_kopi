@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h1>Audit Logs</h1>  
    <table class="table">  
        <thead>  
            <tr>  
                <th>ID</th>  
                <th>User ID</th>  
                <th>Action</th>  
                <th>Timestamp</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach ($auditLogs as $log)  
            <tr>  
                <td>{{ $log->id }}</td>  
                <td>{{ $log->user_id }}</td>  
                <td>{{ $log->action }}</td>  
                <td>{{ $log->created_at }}</td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection  
