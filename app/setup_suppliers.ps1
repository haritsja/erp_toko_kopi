# Buat folder untuk Models  
New-Item -ItemType Directory -Path "app\Models" -Force  
  
# Buat file model Supplier.php  
@"  
<?php  
  
namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Supplier extends Model  
{  
    use HasFactory;  
  
    protected \$fillable = [  
        'name',  
        'contact_person',  
        'email',  
        'phone',  
        'address',  
    ];  
  
    public function purchases()  
    {  
        return \$this->hasMany(Purchase::class);  
    }  
}  
"@ | Set-Content -Path "app\Models\Supplier.php"  
  
# Buat file model Purchase.php  
@"  
<?php  
  
namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Purchase extends Model  
{  
    use HasFactory;  
  
    protected \$fillable = [  
        'supplier_id',  
        'product_id',  
        'quantity',  
        'total_price',  
        'purchase_date',  
    ];  
  
    public function supplier()  
    {  
        return \$this->belongsTo(Supplier::class);  
    }  
  
    public function product()  
    {  
        return \$this->belongsTo(Product::class);  
    }  
}  
"@ | Set-Content -Path "app\Models\Purchase.php"  
  
# Buat file model Product.php  
@"  
<?php  
  
namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Product extends Model  
{  
    use HasFactory;  
  
    protected \$fillable = [  
        'product_name',  
        'description',  
        'stock',  
        'image',  
        'price',  
    ];  
  
    public function purchases()  
    {  
        return \$this->hasMany(Purchase::class);  
    }  
}  
"@ | Set-Content -Path "app\Models\Product.php"  
  
# Buat folder untuk Controllers  
New-Item -ItemType Directory -Path "app\Http\Controllers" -Force  
  
# Buat file controller SupplierController.php  
@"  
<?php  
  
namespace App\Http\Controllers;  
  
use App\Models\Supplier;  
use Illuminate\Http\Request;  
  
class SupplierController extends Controller  
{  
    public function index()  
    {  
        \$suppliers = Supplier::all();  
        return view('suppliers.index', compact('suppliers'));  
    }  
  
    public function create()  
    {  
        return view('suppliers.create');  
    }  
  
    public function store(Request \$request)  
    {  
        \$request->validate([  
            'name' => 'required|string|max:255',  
            'contact_person' => 'nullable|string|max:255',  
            'email' => 'nullable|email|max:255',  
            'phone' => 'nullable|string|max:50',  
            'address' => 'nullable|string',  
        ]);  
  
        Supplier::create(\$request->all());  
        return redirect()->route('suppliers.index')->with('success', 'Pemasok berhasil ditambahkan.');  
    }  
  
    public function edit(Supplier \$supplier)  
    {  
        return view('suppliers.edit', compact('supplier'));  
    }  
  
    public function update(Request \$request, Supplier \$supplier)  
    {  
        \$request->validate([  
            'name' => 'required|string|max:255',  
            'contact_person' => 'nullable|string|max:255',  
            'email' => 'nullable|email|max:255',  
            'phone' => 'nullable|string|max:50',  
            'address' => 'nullable|string',  
        ]);  
  
        \$supplier->update(\$request->all());  
        return redirect()->route('suppliers.index')->with('success', 'Pemasok berhasil diperbarui.');  
    }  
  
    public function destroy(Supplier \$supplier)  
    {  
        \$supplier->delete();  
        return redirect()->route('suppliers.index')->with('success', 'Pemasok berhasil dihapus.');  
    }  
}  
"@ | Set-Content -Path "app\Http\Controllers\SupplierController.php"  
  
# Buat folder untuk views  
New-Item -ItemType Directory -Path "resources\views\suppliers" -Force  
  
# Buat file tampilan index.blade.php  
@"  
@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h2>Manajemen Pemasok</h2>  
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Tambah Pemasok</a>  
  
    <table class="table mt-3">  
        <thead>  
            <tr>  
                <th>ID</th>  
                <th>Nama</th>  
                <th>Kontak Person</th>  
                <th>Email</th>  
                <th>Telepon</th>  
                <th>Alamat</th>  
                <th>Aksi</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach (\$suppliers as \$supplier)  
            <tr>  
                <td>{{ \$supplier->id }}</td>  
                <td>{{ \$supplier->name }}</td>  
                <td>{{ \$supplier->contact_person }}</td>  
                <td>{{ \$supplier->email }}</td>  
                <td>{{ \$supplier->phone }}</td>  
                <td>{{ \$supplier->address }}</td>  
                <td>  
                    <a href="{{ route('suppliers.edit', \$supplier->id) }}" class="btn btn-warning">Edit</a>  
                    <form action="{{ route('suppliers.destroy', \$supplier->id) }}" method="POST" style="display:inline;">  
                        @csrf  
                        @method('DELETE')  
                        <button type="submit" class="btn btn-danger">Hapus</button>  
                    </form>  
                </td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection  
"@ | Set-Content -Path "resources\views\suppliers\index.blade.php"  
  
# Buat file tampilan create.blade.php  
@"  
@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h2>Tambah Pemasok</h2>  
  
    <form action="{{ route('suppliers.store') }}" method="POST">  
        @csrf  
        <div class="mb-3">  
            <label for="name" class="form-label">Nama Pemasok</label>  
            <input type="text" class="form-control" id="name" name="name" required>  
        </div>  
        <div class="mb-3">  
            <label for="contact_person" class="form-label">Kontak Person</label>  
            <input type="text" class="form-control" id="contact_person" name="contact_person">  
        </div>  
        <div class="mb-3">  
            <label for="email" class="form-label">Email</label>  
            <input type="email" class="form-control" id="email" name="email">  
        </div>  
        <div class="mb-3">  
            <label for="phone" class="form-label">Telepon</label>  
            <input type="text" class="form-control" id="phone" name="phone">  
        </div>  
        <div class="mb-3">  
            <label for="address" class="form-label">Alamat</label>  
            <textarea class="form-control" id="address" name="address"></textarea>  
        </div>  
        <button type="submit" class="btn btn-primary">Tambah Pemasok</button>  
    </form>  
</div>  
@endsection  
"@ | Set-Content -Path "resources\views\suppliers\create.blade.php"  
  
# Buat file tampilan edit.blade.php  
@"  
@extends('layouts.app')  
  
@section('content')  
<div class="container">  
    <h2>Edit Pemasok</h2>  
  
    <form action="{{ route('suppliers.update', \$supplier->id) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="mb-3">  
            <label for="name" class="form-label">Nama Pemasok</label>  
            <input type="text" class="form-control" id="name" name="name" value="{{ \$supplier->name }}" required>  
        </div>  
        <div class="mb-3">  
            <label for="contact_person" class="form-label">Kontak Person</label>  
            <input type="text" class="form-control" id="contact_person" name="contact_person" value="{{ \$supplier->contact_person }}">  
        </div>  
        <div class="mb-3">  
            <label for="email" class="form-label">Email</label>  
            <input type="email" class="form-control" id="email" name="email" value="{{ \$supplier->email }}">  
        </div>  
        <div class="mb-3">  
            <label for="phone" class="form-label">Telepon</label>  
            <input type="text" class="form-control" id="phone" name="phone" value="{{ \$supplier->phone }}">  
        </div>  
        <div class="mb-3">  
            <label for="address" class="form-label">Alamat</label>  
            <textarea class="form-control" id="address" name="address">{{ \$supplier->address }}</textarea>  
        </div>  
        <button type="submit" class="btn btn-primary">Perbarui Pemasok</button>  
    </form>  
</div>  
@endsection  
"@ | Set-Content -Path "resources\views\suppliers\edit.blade.php"  
  
# Tambahkan rute di web.php  
Add-Content -Path "routes\web.php" -Value "use App\Http\Controllers\SupplierController;"  
Add-Content -Path "routes\web.php" -Value "Route::resource('suppliers', SupplierController::class);"  
  
Write-Host "Struktur folder dan file untuk manajemen pemasok telah dibuat."  
