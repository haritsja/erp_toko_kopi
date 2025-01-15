<?php  
  
  namespace App\Http\Controllers\Auth;  
  
  use App\Http\Controllers\Controller;  
  use Illuminate\Http\Request;  
  use Illuminate\Support\Facades\Auth;  
    
  class LoginController extends Controller  
  {  
      public function login(Request $request)  
      {  
          // Validasi input  
          $request->validate([  
              'email' => 'required|email',  
              'password' => 'required',  
          ]);  
    
          // Ambil kredensial dari request  
          $credentials = $request->only('email', 'password');  
    
          // Coba login  
          if (Auth::attempt($credentials)) {  
              // Login berhasil, redirect ke halaman yang diinginkan  
              return redirect()->intended('home'); // Ganti 'home' dengan rute yang sesuai  
          }  
    
          // Login gagal, kembali dengan pesan kesalahan  
          return back()->withErrors([  
              'email' => 'The provided credentials do not match our records.',  
          ]);  
      }  
    
      public function logout(Request $request)  
      {  
          Auth::logout();  
          return redirect('/'); // Redirect ke halaman landing setelah logout  
      }  
}  
