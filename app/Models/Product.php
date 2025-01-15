<?php  
  
  namespace App\Models;  
  
  use Illuminate\Database\Eloquent\Factories\HasFactory;  
  use Illuminate\Database\Eloquent\Model;  
    
  class Product extends Model  
  {  
      use HasFactory;  
    
      // Tentukan primary key jika bukan 'id'  
      protected $primaryKey = 'product_id';   
    
      // Jika Anda tidak ingin menggunakan timestamps, Anda bisa menonaktifkannya  
      public $timestamps = true; // Atur ini ke false jika tidak ingin menggunakan created_at dan updated_at  
    
      protected $fillable = [  
          'product_name',  
          'description',  
          'price',  
          'stock',  
          'image',  
      ];  
  }  
  
