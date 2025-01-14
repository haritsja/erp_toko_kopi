<?php  
  
namespace App\Http\Controllers;  
  
use Illuminate\Http\Request;  
use App\Models\Cart;  
  
class CartController extends Controller  
{  
    public function index()  
    {  
        // Mengambil semua item keranjang untuk pengguna yang sedang login  
        $carts = Cart::where('user_id', auth()->id())->get();  
        return view('cart.index', compact('carts'));  
    }  
  
    public function add(Request $request)  
    {  
        // Validasi input  
        $request->validate([  
            'product_name' => 'required|string',  
            'price' => 'required|numeric',  
            'quantity' => 'required|integer|min:1',  
        ]);  
  
        // Menambahkan item ke keranjang  
        $cart = new Cart();  
        $cart->user_id = auth()->id(); // Mengambil ID pengguna yang sedang login  
        $cart->product_name = $request->product_name;  
        $cart->price = $request->price;  
        $cart->quantity = $request->quantity;  
        $cart->save();  
  
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');  
    }  
  
    public function remove($id)  
    {  
        // Menghapus item dari keranjang  
        $cart = Cart::find($id);  
        if ($cart) {  
            $cart->delete();  
            return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');  
        }  
  
        return redirect()->back()->with('error', 'Produk tidak ditemukan!');  
    }  
}  
