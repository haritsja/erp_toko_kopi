<?php

namespace App\Http\Controllers;  
  
use App\Models\Finance;  
use Illuminate\Http\Request;  
  
class FinanceController extends Controller  
{  
    public function index()  
    {  
        $finances = Finance::all(); // Mengambil semua data keuangan  
        return view('finances.index', compact('finances'));  
    }  
  
    public function create()  
    {  
        return view('finances.create'); // Menampilkan form untuk menambah data keuangan  
    }  
  
    public function store(Request $request)  
    {  
        $request->validate([  
            'description' => 'required|string|max:255',  
            'amount' => 'required|numeric',  
            'type' => 'required|in:income,expense',  
            'transaction_date' => 'required|date',  
        ]);  
  
        Finance::create($request->all()); // Menyimpan data keuangan baru  
  
        return redirect()->route('finances.index')->with('success', 'Data keuangan berhasil ditambahkan.');  
    }  
  
    public function edit(Finance $finance)  
    {  
        return view('finances.edit', compact('finance')); // Menampilkan form untuk mengedit data keuangan  
    }  
  
    public function update(Request $request, Finance $finance)  
    {  
        $request->validate([  
            'description' => 'required|string|max:255',  
            'amount' => 'required|numeric',  
            'type' => 'required|in:income,expense',  
            'transaction_date' => 'required|date',  
        ]);  
  
        $finance->update($request->all()); // Memperbarui data keuangan  
  
        return redirect()->route('finances.index')->with('success', 'Data keuangan berhasil diperbarui.');  
    }  
  
    public function destroy(Finance $finance)  
    {  
        $finance->delete(); // Menghapus data keuangan  
        return redirect()->route('finances.index')->with('success', 'Data keuangan berhasil dihapus.');  
    }  
}  

