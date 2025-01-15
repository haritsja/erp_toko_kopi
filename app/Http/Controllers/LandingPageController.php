<?php

namespace App\Http\Controllers;  
  
use App\Models\Product; // Mengimpor model Product  
use Illuminate\Http\Request;  
  
class LandingPageController extends Controller  
{  
    public function index()  
    {  
        // Mengambil semua produk untuk ditampilkan di landing page  
        $products = Product::all(); // Mengambil semua data produk dari database  
  
        // Mengembalikan view 'landing' dengan data produk  
        return view('landing', compact('products')); // Ganti 'landing' dengan nama view Anda  
    }  
}  
