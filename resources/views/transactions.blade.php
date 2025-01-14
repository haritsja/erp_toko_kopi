<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>  
    <title>Transaksi Kasir ERP Toko Kopi</title>  
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
        <a href="/transactions">Transaksi</a>  
        <a href="/logout">Logout</a>  
    </div>  
  
    <div class="content">  
        <h1 class="text-center">Transaksi Kasir</h1>  
        <div class="container">  
            <h2>Pilih Produk</h2>  
            <form id="transaction-form">  
                <div class="form-group">  
                    <label for="customer-name">Nama Pelanggan</label>  
                    <input type="text" id="customer-name" class="form-control" placeholder="Masukkan nama pelanggan">  
                </div>  
                <div class="form-group">  
                    <label for="product">Produk</label>  
                    <select id="product" class="form-control">  
                        <option value="" disabled selected>Pilih Produk</option>  
                        <option value="Kopi Arabika" data-price="50000">Kopi Arabika - Rp 50.000</option>  
                        <option value="Kopi Robusta" data-price="45000">Kopi Robusta - Rp 45.000</option>  
                        <option value="Kopi Luwak" data-price="200000">Kopi Luwak - Rp 200.000</option>  
                        <option value="Kopi Toraja" data-price="60000">Kopi Toraja - Rp 60.000</option>  
                        <option value="Kopi Sumatra" data-price="55000">Kopi Sumatra - Rp 55.000</option>  
                    </select>  
                </div>  
                <div class="form-group">  
                    <label for="quantity">Jumlah</label>  
                    <input type="number" id="quantity" class="form-control" min="1" value="1">  
                </div>  
                <div class="form-group">  
                    <label for="cashier-name">Nama Kasir</label>  
                    <input type="text" id="cashier-name" class="form-control" placeholder="Masukkan nama kasir">  
                </div>  
                <div class="form-group">  
                    <label for="cashier-password">Password Kasir</label>  
                    <input type="password" id="cashier-password" class="form-control" placeholder="Masukkan password kasir">  
                </div>  
                <button type="button" class="btn btn-primary" id="add-product">Tambah Produk</button>  
            </form>  
  
            <h3 class="mt-4">Daftar Produk</h3>  
            <table class="table table-bordered" id="product-list">  
                <thead>  
                    <tr>  
                        <th>Nama Produk</th>  
                        <th>Harga</th>  
                        <th>Jumlah</th>  
                        <th>Total</th>  
                        <th>Aksi</th>  
                    </tr>  
                </thead>  
                <tbody>  
                    <!-- Produk yang ditambahkan akan muncul di sini -->  
                </tbody>  
            </table>  
  
            <h3>Total Pembayaran: <span id="total-payment">Rp 0</span></h3>  
            <button class="btn btn-success" id="complete-transaction">Selesaikan Transaksi</button>  
            <button class="btn btn-info" id="print-invoice">Cetak Invoice</button>  
        </div>  
    </div>  
  
    <script>  
        let totalPayment = 0;  
        let productList = [];  
  
        document.getElementById('add-product').addEventListener('click', function() {  
            const productSelect = document.getElementById('product');  
            const selectedOption = productSelect.options[productSelect.selectedIndex];  
            const productName = selectedOption.value;  
            const productPrice = parseInt(selectedOption.getAttribute('data-price'));  
            const quantity = parseInt(document.getElementById('quantity').value);  
            const cashierName = document.getElementById('cashier-name').value;  
            const cashierPassword = document.getElementById('cashier-password').value;  
  
            // Verifikasi kasir  
            if (cashierName === "ahmad" && cashierPassword === "kopikacau") {  
                if (productName) {  
                    const total = productPrice * quantity;  
                    totalPayment += total;  
  
                    const tableRow = document.createElement('tr');  
                    tableRow.innerHTML = `  
                        <td>${productName}</td>  
                        <td>Rp ${productPrice.toLocaleString('id-ID')}</td>  
                        <td>${quantity}</td>  
                        <td>Rp ${total.toLocaleString('id-ID')}</td>  
                        <td><button class="btn btn-danger remove-product">Hapus</button></td>  
                    `;  
                    document.querySelector('#product-list tbody').appendChild(tableRow);  
                    document.getElementById('total-payment').innerText = `Rp ${totalPayment.toLocaleString('id-ID')}`;  
  
                    // Simpan produk ke dalam array untuk invoice  
                    productList.push({ name: productName, price: productPrice, quantity: quantity, total: total });  
  
                    // Reset form  
                    productSelect.selectedIndex = 0;  
                    document.getElementById('quantity').value = 1;  
                }  
            } else {  
                alert("Username atau password salah!");  
            }  
        });  
  
        document.getElementById('product-list').addEventListener('click', function(e) {  
            if (e.target.classList.contains('remove-product')) {  
                const row = e.target.closest('tr');  
                const total = parseInt(row.cells[3].innerText.replace('Rp ', '').replace('.', ''));  
                totalPayment -= total;  
                document.getElementById('total-payment').innerText = `Rp ${totalPayment.toLocaleString('id-ID')}`;  
                row.remove();  
  
                // Hapus produk dari array  
                const productName = row.cells[0].innerText;  
                productList = productList.filter(product => product.name !== productName);  
            }  
        });  
  
        document.getElementById('complete-transaction').addEventListener('click', function() {  
            alert(`Transaksi selesai! Total pembayaran: Rp ${totalPayment.toLocaleString('id-ID')}`);  
            // Reset total payment and product list  
            totalPayment = 0;  
            document.getElementById('total-payment').innerText = `Rp 0`;  
            document.querySelector('#product-list tbody').innerHTML = '';  
            productList = [];  
        });  
  
        document.getElementById('print-invoice').addEventListener('click', function() {  
            const { jsPDF } = window.jspdf;  
            const doc = new jsPDF();  
  
            // Menambahkan informasi invoice  
            doc.setFontSize(18);  
            doc.text("MaestroCoffee", 20, 20);  
            doc.setFontSize(12);  
            doc.text("Jl. Kapuk II No.4, RT.004/RW.018, Pengasinan, Kec. Rawalumbu, Kota Bks, Jawa Barat 17115", 20, 30);  
            doc.text("Telepon: 081213512496", 20, 35);  
            doc.text("Email: maestrocoffee@gmail.com", 20, 40);  
            doc.text("---------------------------------------------------------", 20, 50);  
            doc.text(`Invoice No: 001`, 20, 60);  
            doc.text(`Tanggal: ${new Date().toLocaleDateString()}`, 20, 65);  
            doc.text(`Kasir: ${document.getElementById('cashier-name').value}`, 20, 70);  
            doc.text("---------------------------------------------------------", 20, 75);  
  
            // Informasi Pelanggan  
            doc.text("Pelanggan:", 20, 85);  
            doc.text(`Nama: ${document.getElementById('customer-name').value}`, 20, 90);  
            doc.text("---------------------------------------------------------", 20, 95);  
  
            // Rincian Produk  
            doc.text("Rincian Produk", 20, 105);  
            doc.text("---------------------------------------------------------", 20, 110);  
  
            // Menambahkan rincian produk secara manual  
            let startY = 115;  
            productList.forEach(product => {  
                doc.text(product.name, 20, startY);  
                doc.text(`Rp ${product.price.toLocaleString('id-ID')}`, 100, startY);  
                doc.text(product.quantity.toString(), 140, startY);  
                doc.text(`Rp ${product.total.toLocaleString('id-ID')}`, 180, startY);  
                startY += 10; // Jarak antar baris  
            });  
  
            // Menambahkan garis pemisah  
            doc.text("---------------------------------------------------------", 20, startY + 5);  
  
            // Menambahkan total akhir  
            doc.text(`Total Pembayaran: Rp ${totalPayment.toLocaleString('id-ID')}`, 20, startY + 10);  
  
            // Menyimpan PDF  
            doc.save("invoice.pdf");  
        });  
    </script>  
</body>  
</html>  
