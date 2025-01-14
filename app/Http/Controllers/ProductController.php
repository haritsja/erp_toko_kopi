<?php    
    
namespace App\Http\Controllers;    
    
use Illuminate\Http\Request;    
    
class ProductController extends Controller    
{    
    public function index()    
    {    
        // Data produk kopi    
        $products = [    
            [    
                'name' => 'Biji Kopi Flores',    
                'price' => 200000,    
                'description' => 'Melange, chocolate, lemongrass, low acidity.',    
                'images' => [    
                    asset('images/flores.png'), // Ganti dengan nama file gambar yang sesuai    
                ],    
                'variants' => ['Kasar', 'Medium', 'Halus'],    
            ],    
            [    
                'name' => 'Biji Kopi Sindoro',    
                'price' => 200000,    
                'description' => 'Tropical fruity, hazelnut, butter honey.',    
                'images' => [    
                    asset('images/sindoro.png'), // Ganti dengan nama file gambar yang sesuai    
                ],    
                'variants' => ['Kasar', 'Medium', 'Halus'],    
            ],    
            [    
                'name' => 'Biji Kopi Aceh Gayo',    
                'price' => 200000,    
                'description' => 'Sweet almond, coffee blossom, tamarin, orange.',    
                'images' => [    
                    asset('images/acehgayo.png'), // Ganti dengan nama file gambar yang sesuai    
                ],    
                'variants' => ['Kasar', 'Medium', 'Halus'],    
            ],    
            [    
                'name' => 'Biji Kopi Toraja',    
                'price' => 200000,    
                'description' => 'Nutty, lemon, sweet choco.',    
                'images' => [    
                    asset('images/toraja.png'), // Ganti dengan nama file gambar yang sesuai    
                ],    
                'variants' => ['Kasar', 'Medium', 'Halus'],    
            ],    
            [    
                'name' => 'Biji Kopi Puntang',    
                'price' => 200000,    
                'description' => 'Nutty, sweet fruity, low acidity.',    
                'images' => [    
                    asset('images/puntang.jpg'), // Ganti dengan nama file gambar yang sesuai    
                ],    
                'variants' => ['Kasar', 'Medium', 'Halus'],    
            ],    
        ];    
    
        return view('landing', compact('products'));    
    }    
}    
