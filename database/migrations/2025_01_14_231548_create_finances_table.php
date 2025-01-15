<?php

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  
  
class CreateFinancesTable extends Migration  
{  
    public function up()  
    {  
        Schema::create('finances', function (Blueprint $table) {  
            $table->id('finance_id'); // Kolom ID keuangan  
            $table->string('description'); // Deskripsi transaksi  
            $table->decimal('amount', 10, 2); // Jumlah uang  
            $table->enum('type', ['income', 'expense']); // Tipe transaksi (pemasukan atau pengeluaran)  
            $table->date('transaction_date'); // Tanggal transaksi  
            $table->timestamps(); // Kolom created_at dan updated_at  
        });  
    }  
  
    public function down()  
    {  
        Schema::dropIfExists('finances');  
    }  
}  
