<?php  
  
use Illuminate\Support\Facades\Route;  
use Illuminate\Support\Facades\Auth; // Impor Auth  
use App\Http\Controllers\DashboardController; // Impor DashboardController  
use App\Http\Controllers\ProductController; // Impor ProductController  
use App\Http\Controllers\SaleController; // Impor SaleController  
use App\Http\Controllers\CustomerController; // Impor CustomerController  
  
  
Route::get('/', function () {  
    return view('welcome');  
});  
  
Auth::routes();  
  
Route::get('/dashboard', [DashboardController::class, 'index']);    
Route::resource('products', ProductController::class);    
Route::resource('sales', SaleController::class);    
Route::resource('customers', CustomerController::class);    
Route::get('/dashboard', function () {  
    return view('dashboard'); // Halaman utama dashboard  
});  
  
Route::get('/customers', function () {  
    return view('customers'); // Halaman dashboard pelanggan  
});  
  
Route::get('/products', function () {  
    return view('products'); // Halaman dashboard produk  
});  
  
Route::get('/sales', function () {  
    return view('sales'); // Halaman dashboard penjualan  
});  