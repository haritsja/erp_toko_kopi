<?php

namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Finance extends Model  
{  
    use HasFactory;  
  
    protected $table = 'finances'; // Menentukan nama tabel  
  
    protected $primaryKey = 'finance_id'; // Menentukan primary key  
  
    protected $fillable = [  
        'description',  
        'amount',  
        'type',  
        'transaction_date',  
    ];  
}  
