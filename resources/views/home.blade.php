@extends('layouts.app')              
  
@section('content')              
<!-- Tambahkan link CSS Bootstrap di sini -->            
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">            
      
<div class="container mt-5">              
    <div class="row justify-content-center">              
        <div class="col-md-12">              
            <div class="card">              
                <div class="card-header bg-primary text-white">{{ __('Selamat Datang di ERP Toko Kopi') }}</div>              
  
                <div class="card-body">              
                    <h5>{{ __('Halo, ') . Auth::user()->name . '!' }}</h5>              
                    <p>{{ __('Anda telah berhasil login! Berikut adalah fitur utama dari sistem ERP:') }}</p>              
  
                    <div class="row">              
                        <!-- Manajemen Produk -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-primary text-white">{{ __('Manajemen Produk') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Katalog Produk: Menyimpan informasi tentang berbagai jenis kopi.') }}</li>              
                                        <li>{{ __('Pengelolaan Stok: Memantau jumlah stok dan mendapatkan notifikasi saat stok rendah.') }}</li>              
                                        <li>{{ __('Kategorisasi Produk: Mengelompokkan produk berdasarkan jenis, asal, atau kategori lainnya.') }}</li>              
                                    </ul>              
                                    <a href="{{ route('products.index') }}" class="btn btn-primary">Kelola Produk</a> <!-- Tautan ke manajemen produk -->          
                                </div>              
                            </div>              
                        </div>              
  
                        <!-- Manajemen Penjualan -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-success text-white">{{ __('Manajemen Penjualan') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Poin Penjualan (POS): Memproses transaksi penjualan secara langsung.') }}</li>              
                                        <li>{{ __('Riwayat Penjualan: Melihat laporan penjualan harian, mingguan, dan bulanan.') }}</li>              
                                        <li>{{ __('Diskon dan Promosi: Mengelola diskon untuk produk tertentu.') }}</li>              
                                    </ul>              
                                    <a href="{{ route('transactions.index') }}" class="btn btn-success">Kelola Penjualan</a> <!-- Tautan ke manajemen penjualan -->          
                                </div>              
                            </div>              
                        </div>              
  
                        <!-- Manajemen Pelanggan -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-warning text-dark">{{ __('Manajemen Pelanggan') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Database Pelanggan: Menyimpan informasi pelanggan dan riwayat pembelian.') }}</li>              
                                        <li>{{ __('Program Loyalitas: Mengelola program loyalitas untuk pelanggan tetap.') }}</li>              
                                    </ul>              
                                    <a href="{{ route('customers.index') }}" class="btn btn-warning">Kelola Pelanggan</a> <!-- Tautan ke manajemen pelanggan -->          
                                </div>              
                            </div>              
                        </div>              
                    </div>              
  
                    <div class="row">              
                        <!-- Manajemen Keuangan -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-info text-white">{{ __('Manajemen Keuangan') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Laporan Keuangan: Menyediakan laporan laba rugi, neraca, dan arus kas.') }}</li>              
                                        <li>{{ __('Pengelolaan Pembayaran: Memantau pembayaran dari pelanggan dan pengeluaran untuk pemasok.') }}</li>              
                                    </ul>              
                                    <a href="{{ route('finances.index') }}" class="btn btn-info">Kelola Keuangan</a> <!-- Tautan ke manajemen keuangan -->          
                                </div>              
                            </div>              
                        </div>              
  
                        <!-- Manajemen Pemasok -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-secondary text-white">{{ __('Manajemen Pemasok') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Database Pemasok: Menyimpan informasi tentang pemasok biji kopi.') }}</li>              
                                        <li>{{ __('Pengelolaan Pembelian: Memantau pembelian dari pemasok dan mengelola faktur.') }}</li>              
                                    </ul>              
                                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Kelola Pemasok</a> <!-- Tautan ke manajemen pemasok -->          
                                </div>              
                            </div>              
                        </div>              
  
                        <!-- Manajemen Inventaris -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-dark text-white">{{ __('Manajemen Inventaris') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Pengelolaan Bahan Baku: Memantau bahan baku yang digunakan dalam pembuatan kopi.') }}</li>              
                                        <li>{{ __('Pengaturan Pembelian: Mengelola pembelian bahan baku berdasarkan kebutuhan.') }}</li>              
                                    </ul>              
                                    <!-- Tautan ke manajemen inventaris -->          
                                </div>              
                            </div>              
                        </div>              
                    </div>              
  
                    <div class="row">              
                        <!-- Laporan dan Analisis -->              
                        <div class="col-md-4">              
                            <div class="card mb-3">              
                                <div class="card-header bg-danger text-white">{{ __('Laporan dan Analisis') }}</div>              
                                <div class="card-body">              
                                    <ul>              
                                        <li>{{ __('Laporan Penjualan: Menyediakan analisis penjualan berdasarkan produk, kategori, atau waktu.') }}</li>              
                                        <li>{{ __('Analisis Pelanggan: Memahami perilaku pelanggan dan preferensi mereka.') }}</li>              
                                    </ul>              
                                    <!-- Tautan ke laporan dan analisis -->          
                                </div>              
                            </div>              
                        </div>              
  <!-- Manajemen Pengguna -->                
<div class="col-md-4">                
    <div class="card mb-3">                
        <div class="card-header bg-light text-dark">{{ __('Manajemen Pengguna') }}</div>                
        <div class="card-body">                
            <ul>                
                <li>{{ __('Pengaturan Akun Pengguna: Membuat dan mengelola akun pengguna dengan hak akses yang berbeda.') }}</li>                
                <li>{{ __('Audit Log: Mencatat aktivitas pengguna untuk keamanan dan audit.') }}</li>                
            </ul>                
            <a href="{{ route('users.index') }}" class="btn btn-light">Kelola Pengguna</a> <!-- Tautan ke manajemen pengguna -->            
        </div>                
    </div>                
</div>                

                            </div>              
                        </div>              
                    </div>              
                </div>              
            </div>              
        </div>              
    </div>              
</div>              
      
<!-- Tambahkan script JS Bootstrap di sini -->            
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>            
@endsection              
