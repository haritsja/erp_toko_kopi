<?php  
  
  use Illuminate\Database\Migrations\Migration;  
  use Illuminate\Database\Schema\Blueprint;  
  use Illuminate\Support\Facades\Schema;  
 
  class CreateAuditLogsTable extends Migration  
  {  
      public function up()  
      {  
          Schema::create('audit_logs', function (Blueprint $table) {  
              $table->id();  
              $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Mengaitkan dengan pengguna  
              $table->string('action'); // Tindakan yang dilakukan  
              $table->timestamps();  
          });  
      }  
 
      public function down()  
      {  
          Schema::dropIfExists('audit_logs');  
      }  
  }  
