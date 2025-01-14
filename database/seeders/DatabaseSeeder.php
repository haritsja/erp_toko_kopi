<?php  
  
namespace Database\Seeders;  
  
use App\Models\User;  
use Illuminate\Database\Seeder;  
use Spatie\Permission\Models\Role;  
  
class DatabaseSeeder extends Seeder  
{  
    /**  
     * Seed the application's database.  
     */  
    public function run(): void  
    {  
        // Buat role jika belum ada  
        $adminRole = Role::firstOrCreate(['name' => 'admin']);  
        $kasirRole = Role::firstOrCreate(['name' => 'kasir']);  
  
        // Buat pengguna dengan role admin  
        $adminUser = User::factory()->create([  
            'name' => 'Admin User',  
            'email' => 'admin@example.com',  
        ]);  
        $adminUser->assignRole($adminRole);  
  
        // Buat pengguna dengan role kasir  
        $kasirUser = User::factory()->create([  
            'name' => 'Kasir User',  
            'email' => 'kasir@example.com',  
        ]);  
        $kasirUser->assignRole($kasirRole);  
    }  
}  
