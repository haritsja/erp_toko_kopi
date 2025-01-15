<?php

namespace App\Models;  
  
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  
  
class Customer extends Model  
{  
    use HasFactory;  
  
    protected $table = 'customer'; // Menentukan nama tabel  
  
    protected $primaryKey = 'customer_id'; // Menentukan primary key  
  
    protected $fillable = [  
        'customer_name',  
        'phone_number',  
        'address',  
        'membership_status',  
        'membership_expiry',  
        'total_points',  
    ];  
}  

