<?php    
    
namespace App\Http\Controllers;    
    
use App\Models\Product;    
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Storage; // Pastikan ini ada untuk menghapus gambar  
  
class ProductController extends Controller    
{    
    public function index()    
    {    
        $products = Product::all();    
        return view('products.index', compact('products'));    
    }    
    
    public function create()    
    {    
        return view('products.create');    
    }    
    
    public function store(Request $request)      
    {      
        $request->validate([      
            'product_name' => 'required|string|max:255', // Ganti 'name' dengan 'product_name'  
            'description' => 'nullable|string',      
            'price' => 'required|numeric',      
            'stock' => 'required|integer',      
            'category' => 'nullable|string',      
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar      
        ]);      
          
        $product = new Product();      
        $product->product_name = $request->product_name; // Ganti 'name' dengan 'product_name'  
        $product->description = $request->description;      
        $product->price = $request->price;      
        $product->stock = $request->stock;      
          
        if ($request->hasFile('image')) {      
            $path = $request->file('image')->store('images', 'public'); // Simpan gambar      
            $product->image = $path;      
        }      
          
        $product->save();      
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');      
    }    
    
    public function edit(Product $product)    
    {    
        return view('products.edit', compact('product'));    
    }  
    
    public function update(Request $request, Product $product)        
{        
    $request->validate([        
        'product_name' => 'required|string|max:255',    
        'description' => 'nullable|string',        
        'price' => 'required|numeric',        
        'stock' => 'required|integer',        
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar        
    ]);        
  
    $product->product_name = $request->product_name;    
    $product->description = $request->description;        
    $product->price = $request->price;        
    $product->stock = $request->stock;        
  
    if ($request->hasFile('image')) {        
        // Hapus gambar lama jika ada        
        if ($product->image) {        
            Storage::disk('public')->delete($product->image);        
        }        
        $path = $request->file('image')->store('images', 'public');        
        $product->image = $path;        
    }        
  
    $product->save();        
    return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');        
}  
    
    public function destroy(Product $product)    
    {    
        // Hapus gambar jika ada  
        if ($product->image) {  
            Storage::disk('public')->delete($product->image);  
        }  
          
        $product->delete();    
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');    
    }    
}  
