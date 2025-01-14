<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login</title>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Menambahkan Font Awesome -->  
    <style>  
        body {  
            background-color: #f8f9fa;  
            height: 100vh; /* Mengatur tinggi body untuk centering */  
            display: flex; /* Menggunakan flexbox */  
            justify-content: center; /* Mengatur konten ke tengah secara horizontal */  
            align-items: center; /* Mengatur konten ke tengah secara vertikal */  
        }  
        .login-container {  
            max-width: 500px; /* Memperbesar lebar maksimum form */  
            padding: 30px; /* Memperbesar padding */  
            background: white;  
            border-radius: 8px;  
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
        }  
        .login-header {  
            text-align: center;  
            margin-bottom: 20px;  
        }  
    </style>  
</head>  
<body>  
    <div class="login-container">
        
    <div class="text-center mb-3">  
            <button class="btn btn-secondary" onclick="window.history.back();">  
                <i class="fas fa-arrow-left"></i> <!-- Simbol Kembali -->  
            </button>  
        </div>    
        <h2 class="login-header">Login</h2>  
        @if (session('error'))  
            <div class="alert alert-danger">{{ session('error') }}</div>  
        @endif  
  
        <!-- Tombol Back dengan simbol -->  
       
  
        <form method="POST" action="{{ route('login') }}">  
            @csrf  
            <div class="form-group">  
                <label for="email">Email</label>  
                <input type="email" class="form-control" id="email" name="email" required autofocus>  
            </div>  
            <div class="form-group">  
                <label for="password">Password</label>  
                <input type="password" class="form-control" id="password" name="password" required>  
            </div>  
            <button type="submit" class="btn btn-primary btn-block">Login</button>  
        </form>  
        <div class="text-center mt-3">  
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>  
        </div>  
        <div class="text-center mt-2">  
            <a href="{{ route('register') }}">Register</a>  
        </div>  
    </div>  
</body>  
</html>  
