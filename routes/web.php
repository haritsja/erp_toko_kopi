<?php  
  
  use Illuminate\Support\Facades\Route;    
  use Illuminate\Support\Facades\Auth;    
  use App\Http\Controllers\DashboardController;    
  use App\Http\Controllers\ProductController;    
  use App\Http\Controllers\SaleController;    
  use App\Http\Controllers\CustomerController;    
  use App\Http\Controllers\CartController;    
  use App\Http\Controllers\Auth\LoginController;    
  use App\Http\Controllers\LandingPageController; // Impor LandingPageController
  use App\Http\Controllers\TransactionController;  
  use App\Http\Controllers\FinanceController;
  use App\Http\Controllers\SupplierController;     
  use App\Http\Controllers\UserController;  
  use App\Http\Controllers\AuditLogController;  
  




  
  



  
    
  // Rute untuk landing page  
  Route::get('/', [LandingPageController::class, 'index']); // Mengarahkan ke landing page  
    
  // Rute autentikasi  
  Auth::routes(); // Ini akan membuat rute untuk login, logout, dan registrasi secara otomatis  
    
  // Rute untuk dashboard dan resource  
  Route::get('/dashboard', [DashboardController::class, 'index']);    
  Route::resource('products', ProductController::class);    
  Route::resource('transactions', TransactionController::class);   
  Route::resource('customers', CustomerController::class);
  Route::resource('finances', FinanceController::class);
  Route::resource('suppliers', SupplierController::class);  
  Route::resource('users', UserController::class);
  Route::get('audit-logs', [AuditLogController::class, 'index'])->name('audit-logs.index');         
    
  // Rute untuk keranjang belanja  
  Route::get('/cart', [CartController::class, 'index'])->middleware('auth');    
  Route::post('/cart/add', [CartController::class, 'add'])->middleware('auth');    
  Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->middleware('auth');    
    
  // Rute untuk logout  
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');    
    
  // Rute untuk halaman home setelah login  
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');    
  
