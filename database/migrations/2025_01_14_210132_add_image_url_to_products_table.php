<?php

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  
  
class AddImageUrlToProductsTable extends Migration  
{  
    public function up()  
    {  
        Schema::table('products', function (Blueprint $table) {  
            $table->string('image_url')->nullable(); // Menambahkan kolom image_url  
        });  
    }  
  
    public function down()  
    {  
        Schema::table('products', function (Blueprint $table) {  
            $table->dropColumn('image_url'); // Menghapus kolom image_url jika migrasi dibatalkan  
        });  
    }  
}  

