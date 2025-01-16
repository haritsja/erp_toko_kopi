<?php

namespace App\Http\Controllers;  
  
   use App\Models\Supplier;  
   use Illuminate\Http\Request;  
  
   class SupplierController extends Controller  
   {  
       public function index()  
       {  
           $suppliers = Supplier::all();  
           return view('suppliers.index', compact('suppliers'));  
       }  
  
       public function create()  
       {  
           return view('suppliers.create');  
       }  
  
       public function store(Request $request)  
       {  
           $request->validate([  
               'name' => 'required',  
               'contact_person' => 'nullable',  
               'phone' => 'nullable',  
               'email' => 'nullable|email',  
               'address' => 'nullable',  
           ]);  
  
           Supplier::create($request->all());  
           return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.');  
       }  
  
       public function edit(Supplier $supplier)  
       {  
           return view('suppliers.edit', compact('supplier'));  
       }  
  
       public function update(Request $request, Supplier $supplier)  
       {  
           $request->validate([  
               'name' => 'required',  
               'contact_person' => 'nullable',  
               'phone' => 'nullable',  
               'email' => 'nullable|email',  
               'address' => 'nullable',  
           ]);  
  
           $supplier->update($request->all());  
           return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');  
       }  
  
       public function destroy(Supplier $supplier)  
       {  
           $supplier->delete();  
           return redirect()->route('suppliers.index')->with('success', 'Supplier deleted successfully.');  
       }  
   }  