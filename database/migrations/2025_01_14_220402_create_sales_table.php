<?php

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  
  
class CreateSalesTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('sales', function (Blueprint $table) {  
            $table->id('transaction_id'); // Kolom transaction_id sebagai primary key  
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Menghubungkan dengan tabel users  
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Menghubungkan dengan tabel customers  
            $table->decimal('total_price', 10, 2); // Total harga penjualan  
            $table->date('sale_date'); // Tanggal penjualan  
            $table->timestamps(); // Kolom created_at dan updated_at  
        });  
    }  
  
    public function down()  
    {  
        Schema::dropIfExists('sales');  
    }  
}  

