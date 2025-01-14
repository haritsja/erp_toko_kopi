<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <title>Dashboard ERP Toko Kopi</title>  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
        }  
        .sidebar {  
            height: 100vh;  
            width: 250px;  
            position: fixed;  
            top: 0;  
            left: 0;  
            background-color: #343a40;  
            padding-top: 20px;  
        }  
        .sidebar a {  
            padding: 10px 15px;  
            text-decoration: none;  
            font-size: 18px;  
            color: white;  
            display: block;  
        }  
        .sidebar a:hover {  
            background-color: #495057;  
        }  
        .content {  
            margin-left: 260px;  
            padding: 20px;  
        }  
        .card {  
            margin-bottom: 20px;  
        }  
    </style>  
</head>  
<body>  
<div class="sidebar">    
    <h2 class="text-white text-center">Menu</h2>    
    <a href="/dashboard">Dashboard</a>    
    <a href="/products">Produk</a>    
    <a href="/sales">Penjualan</a>    
    <a href="/customers">Pelanggan</a>    
    <a href="/transactions">Transaksi</a>  <!-- Tambahkan tautan ini -->  
    <a href="/logout">Logout</a>    
</div>  

  
    <div class="content">  
        <div class="container mt-5">  
            <h1 class="text-center">Dashboard ERP Toko Kopi</h1>  
            <div class="row">  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">Total Produk</h5>  
                            <p class="card-text" id="total-products">0</p>  
                        </div>  
                    </div>  
                </div>  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">Total Penjualan</h5>  
                            <p class="card-text" id="total-sales">0</p>  
                        </div>  
                    </div>  
                </div>  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">Total Pelanggan</h5>  
                            <p class="card-text" id="total-customers">0</p>  
                        </div>  
                    </div>  
                </div>  
            </div>  
  
            <div class="row mt-4">  
                <div class="col-md-12">  
                    <h2>Grafik Penjualan</h2>  
                    <canvas id="salesChart"></canvas>  
                </div>  
            </div>  
        </div>  
    </div>  
  
    <script>  
        // Data dummy untuk grafik  
        const salesData = {  
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],  
            datasets: [{  
                label: 'Penjualan',  
                data: [12, 19, 3, 5, 2, 3],  
                borderColor: 'rgba(75, 192, 192, 1)',  
                backgroundColor: 'rgba(75, 192, 192, 0.2)',  
                borderWidth: 1  
            }]  
        };  
  
        const config = {  
            type: 'line',  
            data: salesData,  
            options: {  
                scales: {  
                    y: {  
                        beginAtZero: true  
                    }  
                }  
            }  
        };  
  
        const salesChart = new Chart(  
            document.getElementById('salesChart'),  
            config  
        );  
  
        // Mengambil data dari server (contoh)  
        document.getElementById('total-products').innerText = 100; // Ganti dengan data nyata  
        document.getElementById('total-sales').innerText = 200; // Ganti dengan data nyata  
        document.getElementById('total-customers').innerText = 50; // Ganti dengan data nyata  
    </script>  
</body>  
</html>  
