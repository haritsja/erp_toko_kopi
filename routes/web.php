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
