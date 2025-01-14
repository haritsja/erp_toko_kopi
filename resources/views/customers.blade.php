<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <title>Dashboard Pelanggan ERP Toko Kopi</title>  
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
    </style>  
</head>  
<body>  
    <div class="sidebar">  
        <h2 class="text-white text-center">Menu</h2>  
        <a href="/dashboard">Dashboard</a>  
        <a href="/products">Produk</a>  
        <a href="/sales">Penjualan</a>  
        <a href="/customers">Pelanggan</a>  
        <a href="/logout">Logout</a>  
    </div>  
  
    <div class="content">  
        <h1 class="text-center">Dashboard Pelanggan</h1>  
        <div class="container">  
            <h2>Total Pelanggan</h2>  
            <p id="total-customers">0</p>  
  
            <h3>Top Customer</h3>  
            <table class="table table-striped">  
                <thead>  
                    <tr>  
                        <th>Nama Pelanggan</th>  
                        <th>Total Pembelian</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <tr>  
                        <td>John Doe</td>  
                        <td>Rp 1.500.000</td>  
                    </tr>  
                    <tr>  
                        <td>Jane Smith</td>  
                        <td>Rp 1.200.000</td>  
                    </tr>  
                    <tr>  
                        <td>Michael Johnson</td>  
                        <td>Rp 1.000.000</td>  
                    </tr>  
                </tbody>  
            </table>  
  
            <h3>Pembelian Terakhir</h3>  
            <table class="table table-bordered">  
                <thead>  
                    <tr>  
                        <th>Nama Pelanggan</th>  
                        <th>Produk</th>  
                        <th>Tanggal Pembelian</th>  
                        <th>Jumlah</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <tr>  
                        <td>John Doe</td>  
                        <td>Kopi Arabika</td>  
                        <td>2025-01-01</td>  
                        <td>2</td>  
                    </tr>  
                    <tr>  
                        <td>Jane Smith</td>  
                        <td>Kopi Robusta</td>  
                        <td>2025-01-02</td>  
                        <td>1</td>  
                    </tr>  
                    <tr>  
                        <td>Michael Johnson</td>  
                        <td>Kopi Luwak</td>  
                        <td>2025-01-03</td>  
                        <td>3</td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
    </div>  
  
    <script>  
        // Data dummy untuk total pelanggan  
        document.getElementById('total-customers').innerText = 50; // Ganti dengan data nyata  
    </script>  
</body>  
</html>  
