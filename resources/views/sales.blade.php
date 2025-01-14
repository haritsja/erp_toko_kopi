<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
    <title>Dashboard Penjualan ERP Toko Kopi</title>  
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
        <h1 class="text-center">Dashboard Penjualan</h1>  
        <div class="container">  
            <h2>Total Penjualan</h2>  
            <p id="total-sales">0</p>  
  
            <h3>Grafik Produk Paling Laku</h3>  
            <canvas id="topProductsChart"></canvas>  
  
            <h3>Grafik Penjualan Bulanan</h3>  
            <canvas id="monthlySalesChart"></canvas>  
  
            <h3>Pembelian Ulang Terbanyak</h3>  
            <table class="table table-bordered">  
                <thead>  
                    <tr>  
                        <th>Nama Produk</th>  
                        <th>Jumlah Pembelian Ulang</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <tr>  
                        <td>Kopi Arabika</td>  
                        <td>15</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Robusta</td>  
                        <td>10</td>  
                    </tr>  
                    <tr>  
                        <td>Kopi Luwak</td>  
                        <td>8</td>  
                    </tr>  
                </tbody>  
            </table>  
        </div>  
    </div>  
  
    <script>  
        // Data dummy untuk total penjualan  
        document.getElementById('total-sales').innerText = 2000000; // Ganti dengan data nyata  
  
        // Data untuk grafik produk paling laku  
        const topProductsData = {  
            labels: ['Kopi Arabika', 'Kopi Robusta', 'Kopi Luwak', 'Kopi Toraja', 'Kopi Sumatra'],  
            datasets: [{  
                label: 'Total Penjualan',  
                data: [150, 100, 80, 60, 40], // Ganti dengan data nyata  
                backgroundColor: [  
                    'rgba(75, 192, 192, 0.2)',  
                    'rgba(255, 99, 132, 0.2)',  
                    'rgba(255, 206, 86, 0.2)',  
                    'rgba(54, 162, 235, 0.2)',  
                    'rgba(153, 102, 255, 0.2)'  
                ],  
                borderColor: [  
                    'rgba(75, 192, 192, 1)',  
                    'rgba(255, 99, 132, 1)',  
                    'rgba(255, 206, 86, 1)',  
                    'rgba(54, 162, 235, 1)',  
                    'rgba(153, 102, 255, 1)'  
                ],  
                borderWidth: 1  
            }]  
        };  
  
        const topProductsConfig = {  
            type: 'bar',  
            data: topProductsData,  
            options: {  
                scales: {  
                    y: {  
                        beginAtZero: true  
                    }  
                }  
            }  
        };  
  
        const topProductsChart = new Chart(  
            document.getElementById('topProductsChart'),  
            topProductsConfig  
        );  
  
        // Data untuk grafik penjualan bulanan  
        const monthlySalesData = {  
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],  
            datasets: [{  
                label: 'Total Penjualan Bulanan',  
                data: [500000, 700000, 800000, 600000, 900000, 1000000], // Ganti dengan data nyata  
                borderColor: 'rgba(75, 192, 192, 1)',  
                backgroundColor: 'rgba(75, 192, 192, 0.2)',  
                borderWidth: 1  
            }]  
        };  
  
        const monthlySalesConfig = {  
            type: 'line',  
            data: monthlySalesData,  
            options: {  
                scales: {  
                    y: {  
                        beginAtZero: true  
                    }  
                }  
            }  
        };  
  
        const monthlySalesChart = new Chart(  
            document.getElementById('monthlySalesChart'),  
            monthlySalesConfig  
        );  
    </script>  
</body>  
</html>  
