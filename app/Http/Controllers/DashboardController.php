<?php  
  
namespace App\Http\Controllers;  
  
use Illuminate\Http\Request;  
  
class DashboardController extends Controller  
{  
    public function index()  
    {  
        // Pastikan pengguna sudah terautentikasi  
        if (auth()->check()) {  
            $user = auth()->user(); // Mendapatkan pengguna yang sedang login  
  
            // Cek role pengguna  
            if ($user->hasRole('admin')) {  
                // Akses untuk admin  
                return view('admin.dashboard');  
            } elseif ($user->hasRole('kasir')) {  
                // Akses untuk kasir  
                return view('kasir.dashboard');  
            }  
        }  
  
        return redirect('/'); // Redirect jika tidak memiliki akses  
    }  
}  
