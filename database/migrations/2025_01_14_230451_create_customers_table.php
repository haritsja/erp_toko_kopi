<?php

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  
  
class CreateCustomersTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('customers', function (Blueprint $table) {  
            $table->id('customer_id'); // Kolom ID pelanggan  
            $table->string('customer_name'); // Nama pelanggan  
            $table->string('phone_number')->nullable(); // Nomor telepon pelanggan  
            $table->text('address')->nullable(); // Alamat pelanggan  
            $table->timestamps(); // Kolom created_at dan updated_at  
            $table->string('membership_status')->default('regular'); // Status keanggotaan  
            $table->date('membership_expiry')->nullable(); // Tanggal kedaluwarsa keanggotaan  
            $table->integer('total_points')->default(0); // Total poin pelanggan  
        });  
    }  
  
    public function down()  
    {  
        Schema::dropIfExists('customers');  
    }  
}  

