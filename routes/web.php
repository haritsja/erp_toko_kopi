<?php    
    
use Illuminate\Support\Facades\Route;    
use Illuminate\Support\Facades\Auth;    
use App\Http\Controllers\DashboardController;    
use App\Http\Controllers\ProductController;    
use App\Http\Controllers\SaleController;    
use App\Http\Controllers\CustomerController;    
use App\Http\Controllers\CartController; // Impor CartController  
  
// Route untuk landing page    
Route::get('/', [ProductController::class, 'index']); // Mengarahkan ke katalog produk    
    
Auth::routes();    
    
Route::get('/dashboard', [DashboardController::class, 'index']);        
Route::resource('products', ProductController::class);        
Route::resource('sales', SaleController::class);        
Route::resource('customers', CustomerController::class);        
    
// Route untuk halaman dashboard    
Route::get('/customers', function () {      
    return view('customers'); // Halaman dashboard pelanggan      
});      
    
Route::get('/products', function () {      
    return view('products'); // Halaman dashboard produk      
});      
    
Route::get('/sales', function () {      
    return view('sales'); // Halaman dashboard penjualan      
});      
    
Route::get('/transactions', function () {      
    return view('transactions'); // Halaman transaksi kasir      
});      
  
// Route untuk keranjang belanja  
Route::get('/cart', [CartController::class, 'index'])->middleware('auth');    
Route::post('/cart/add', [CartController::class, 'add'])->middleware('auth');    
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->middleware('auth');    
  
Auth::routes();  
  
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  
