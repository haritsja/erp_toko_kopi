<?php

namespace App\Http\Controllers;  
  
use App\Models\Customer;  
use Illuminate\Http\Request;  
  
class CustomerController extends Controller  
{  
    public function index()  
    {  
        $customers = Customer::all(); // Mengambil semua pelanggan  
        return view('customers.index', compact('customers'));  
    }  
  
    public function create()  
    {  
        return view('customers.create'); // Menampilkan form untuk menambah pelanggan  
    }  
  
    public function store(Request $request)  
    {  
        $request->validate([  
            'customer_name' => 'required|string|max:255',  
            'phone_number' => 'nullable|string|max:15',  
            'address' => 'nullable|string',  
            'membership_status' => 'nullable|string|max:50',  
            'membership_expiry' => 'nullable|date',  
            'total_points' => 'nullable|integer',  
        ]);  
  
        Customer::create($request->all()); // Menyimpan pelanggan baru  
  
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil ditambahkan.');  
    }  
  
    public function edit(Customer $customer)  
    {  
        return view('customers.edit', compact('customer')); // Menampilkan form untuk mengedit pelanggan  
    }  
  
    public function update(Request $request, Customer $customer)  
    {  
        $request->validate([  
            'customer_name' => 'required|string|max:255',  
            'phone_number' => 'nullable|string|max:15',  
            'address' => 'nullable|string',  
            'membership_status' => 'nullable|string|max:50',  
            'membership_expiry' => 'nullable|date',  
            'total_points' => 'nullable|integer',  
        ]);  
  
        $customer->update($request->all()); // Memperbarui data pelanggan  
  
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil diperbarui.');  
    }  
  
    public function destroy(Customer $customer)  
    {  
        $customer->delete(); // Menghapus pelanggan  
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil dihapus.');  
    }  
}  

