<?php

namespace App\Http\Controllers;  
  
use App\Models\Transaction; // Ganti Sale dengan Transaction  
use App\Models\Customer;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  
  
class TransactionController extends Controller  
{  
    public function index()  
    {  
        $transactions = Transaction::with(['user', 'customer'])->get(); // Mengambil semua transaksi  
        return view('transactions.index', compact('transactions'));  
    }  
  
    public function create()  
    {  
        $customers = Customer::all(); // Mengambil semua pelanggan untuk dropdown  
        return view('transactions.create', compact('customers'));  
    }  
  
    public function store(Request $request)  
    {  
        $request->validate([  
            'customer_id' => 'required|exists:customers,id',  
            'total_price' => 'required|numeric',  
            'sale_date' => 'required|date',  
        ]);  
  
        Transaction::create([  
            'user_id' => Auth::id(), // Mengambil ID pengguna yang sedang login  
            'customer_id' => $request->customer_id,  
            'total_price' => $request->total_price,  
            'sale_date' => $request->sale_date,  
        ]);  
  
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan.');  
    }  
  
    public function edit(Transaction $transaction)  
    {  
        $customers = Customer::all(); // Mengambil semua pelanggan untuk dropdown  
        return view('transactions.edit', compact('transaction', 'customers'));  
    }  
  
    public function update(Request $request, Transaction $transaction)  
    {  
        $request->validate([  
            'customer_id' => 'required|exists:customers,id',  
            'total_price' => 'required|numeric',  
            'sale_date' => 'required|date',  
        ]);  
  
        $transaction->update([  
            'customer_id' => $request->customer_id,  
            'total_price' => $request->total_price,  
            'sale_date' => $request->sale_date,  
        ]);  
  
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui.');  
    }  
  
    public function destroy(Transaction $transaction)  
    {  
        $transaction->delete();  
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus.');  
    }  
}  

