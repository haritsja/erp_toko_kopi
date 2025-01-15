<?php


namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Transaction extends Model  
{  
    use HasFactory;  
  
    protected $table = 'transactions'; // Menentukan nama tabel  
  
    protected $primaryKey = 'transaction_id'; // Tentukan primary key  
  
    protected $fillable = [  
        'user_id',  
        'customer_id',  
        'total_price',  
        'sale_date',  
    ];  
  
    public function user()  
    {  
        return $this->belongsTo(User::class);  
    }  
  
    public function customer()  
    {  
        return $this->belongsTo(Customer::class);  
    }  
}  
