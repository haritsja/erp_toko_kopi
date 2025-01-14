<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <title>Dashboard Produk ERP Toko Kopi</title>  
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
        <h1 class="text-center">Dashboard Produk</h1>  
        <div class="container">  
            <h2>Total Produk</h2>  
            <p id="total-products">0</p>  
  
            <h3>Daftar Produk</h3>  
            <table class="table table-bordered">  
                <thead>  
                    <tr>  
                        <th>Nama Produk</th>  
                        <th>Kategori</th>  
                        <th>Harga</th>  
                        <th>Stok</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <tr>  
                        <td>Kopi Arabika</td>  
                        <td>Kopi</td>  
                        <td>Rp 50.000</td>  
                        <td>100</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Robusta</td>  
                        <td>Kopi</td>  
                        <td>Rp 45.000</td>  
                        <td>80</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Luwak</td>  
                        <td>Kopi</td>  
                        <td>Rp 200.000</td>  
                        <td>50</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Toraja</td>  
                        <td>Kopi</td>  
                        <td>Rp 60.000</td>  
                        <td>70</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Sumatra</td>  
                        <td>Kopi</td>  
                        <td>Rp 55.000</td>  
                        <td>90</td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
    </div>  
  
    <script>  
        // Data dummy untuk total produk  
        document.getElementById('total-products').innerText = 5; // Ganti dengan data nyata  
    </script>  
</body>  
</html>  
