<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Maestro Coffee Supply</title>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">  
    <style>  
        body {  
            background-color: #f9f9f9; /* Warna latar belakang */  
            font-family: 'Poppins', sans-serif;  
        }  
        .navbar {  
            background-color: #fff; /* Navbar background */  
        }  
        .navbar-brand {  
            font-weight: 600;  
            color: #333;  
        }  
        .product-card {  
            margin: 20px;  
            border: none;  
            border-radius: 10px;  
            overflow: hidden;  
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  
            transition: transform 0.2s, box-shadow 0.2s;  
            cursor: pointer;  
        }  
        .product-card:hover {  
            transform: scale(1.05);  
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);  
        }  
        .product-image {  
            height: 200px;  
            object-fit: cover;  
            width: 100%;  
        }  
        .about-section, .story-section, .marketing-section, .cta-section {  
            margin: 40px 0;  
            text-align: center;  
            background-color: #fff; /* Section background */  
            padding: 40px 20px;  
            border-radius: 10px;  
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  
        }  
        .about-image, .img-fluid {  
            width: 100%;  
            height: auto;  
            max-height: 300px;  
            object-fit: cover;  
            border-radius: 10px;  
        }  
        .testimonial-section {  
            background-color: #f8f9fa;  
            padding: 20px;  
            border-radius: 5px;  
            margin: 20px 0;  
        }  
        .cta-section {  
            background-color: #343a40; /* CTA background */  
            color: white;  
            padding: 40px 20px;  
            border-radius: 10px;  
        }  
        .cta-section input {  
            border-radius: 20px;  
        }  
        .cta-section button {  
            border-radius: 20px;  
        }  
    </style>  
</head>  
<body>  
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f0e1; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-radius: 10px; padding: 10px 20px;">    
    <a class="navbar-brand" href="#" style="font-weight: bold; color: #6f4c3e;">Maestro Coffee Supply</a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">    
        <span class="navbar-toggler-icon"></span>    
    </button>    
    <div class="collapse navbar-collapse" id="navbarNav">    
        <ul class="navbar-nav ml-auto">    
            <li class="nav-item">    
                <a class="nav-link" href="#about" style="color: #6f4c3e; transition: color 0.3s;">Tentang Kami</a>    
            </li>    
            <li class="nav-item">    
                <a class="nav-link" href="#products" style="color: #6f4c3e; transition: color 0.3s;">Katalog Produk</a>    
            </li>    
            <li class="nav-item">    
                <a class="nav-link" href="#login" data-toggle="modal" data-target="#loginModal" style="color: #6f4c3e; transition: color 0.3s;">Login</a>    
            </li>
            <li class="nav-item">  
    <a class="nav-link" href="#register" data-toggle="modal" data-target="#registerModal" style="color: #6f4c3e; transition: color 0.3s;">Registrasi</a>  
</li>  

            <li class="nav-item">  
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">  
        @csrf  
        <button type="submit" class="nav-link btn btn-link" style="color: #6f4c3e;">Logout</button>  
    </form>  
</li>  
    
        </ul>    
    </div>    
</nav>  
  
<style>  
    .navbar-nav .nav-link:hover {  
        color: #8b5a2b; /* Change to a slightly darker brown for hover effect */  
    }  
</style>  

  
<style>  
    .navbar-nav .nav-link:hover {  
        color:rgb(114, 58, 10); /* Change to your desired hover color */  
    }  
</style>  

  
    <div class="container-fluid">  
        <h1 class="text-center my-4">Maestro Coffee Supply</h1>  
  
       <!-- Slider -->      
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-width: 800px; margin: auto; background-color: #f5f0e1; border-radius: 10px; padding: 10px;">    
    <div class="carousel-inner">    
        <div class="carousel-item active">    
            <img src="https://images.unsplash.com/photo-1653656120474-a1cf63bc3f36?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29mZmV8ZW58MHx8MHx8fDA%3D" class="d-block w-100" alt="Kopi 1" style="max-height: 400px; object-fit: cover; border-radius: 10px;">    
        </div>    
        <div class="carousel-item">    
            <img src="https://images.unsplash.com/photo-1442411210769-b95c4632195e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29mZmV8ZW58MHx8MHx8fDA%3D" class="d-block w-100" alt="Kopi 2" style="max-height: 400px; object-fit: cover; border-radius: 10px;">    
        </div>    
        <div class="carousel-item">    
            <img src="https://images.unsplash.com/photo-1632595508805-bd7b9ce74173?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fGNvZmZlfGVufDB8fDB8fHww" class="d-block w-100" alt="Kopi 3" style="max-height: 400px; object-fit: cover; border-radius: 10px;">    
        </div>    
    </div>    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">    
        <span class="carousel-control-prev-icon" style="background-color: #6f4c3e; border-radius: 50%;"></span>    
        <span class="sr-only">Previous</span>    
    </a>    
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">    
        <span class="carousel-control-next-icon" style="background-color: #6f4c3e; border-radius: 50%;"></span>    
        <span class="sr-only">Next</span>    
    </a>    
</div>    


  
      <!-- About Section -->      
<div class="about-section" id="about" style="background-color: #f5f0e1; padding: 40px 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">      
    <h2 class="text-center" style="font-weight: 600; color: #6f4c3e; font-size: 2.5rem;">Tentang Kami</h2>      
    <h4 class="text-muted text-center" style="font-size: 1.5rem; color: #6f4c3e;">"Menyajikan Cita Rasa Kopi Terbaik dari Tanah Air"</h4>      
    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fHRvJTIwY29mZmVlfGVufDB8fHx8MTYyMjY5MjY0Nw&ixlib=rb-1.2.1&q=80&w=1080" alt="Tentang Maestro Coffee" class="about-image img-fluid" style="border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">      
    <p style="text-align: center; font-size: 1.2rem; color: #333;">Maestro Coffee Supply adalah penyedia kopi berkualitas tinggi yang berkomitmen untuk memberikan pengalaman terbaik bagi pecinta kopi. Kami menawarkan berbagai jenis kopi dari berbagai daerah di Indonesia.</p>      
    <p style="text-align: center; font-size: 1.2rem; color: #333;">Kami didirikan pada tahun 2020 dengan tujuan untuk menghubungkan pecinta kopi dengan biji kopi terbaik dari petani lokal. Sejak saat itu, kami telah berkomitmen untuk mendukung pertanian berkelanjutan dan memberikan pengalaman kopi yang otentik.</p>      
    <p style="text-align: center; font-size: 1.2rem; color: #333;">Kami hanya menggunakan biji kopi yang dipilih secara cermat dari daerah penghasil kopi terbaik di Indonesia. Setiap biji kopi kami diproses dengan metode yang menjaga cita rasa dan aroma aslinya, sehingga Anda dapat menikmati secangkir kopi yang sempurna setiap saat.</p>      
    
    <div class="row mt-4">      
        <div class="col-md-4 text-center">      
            <div class="card" style="border: none; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-radius: 10px;">      
                <div class="card-body text-center">      
                    <img src="https://img.icons8.com/ios-filled/50/000000/coffee.png" alt="Kopi Organik" style="border-radius: 10px; width: 50px; height: 50px;" />      
                    <h5 class="card-title" style="font-size: 1.5rem; color: #6f4c3e;">Kopi Organik</h5>      
                    <p class="card-text" style="font-size: 1.2rem; color: #333;">Kami hanya menggunakan biji kopi organik tanpa pestisida.</p>      
                </div>      
            </div>      
        </div>      
        <div class="col-md-4 text-center">      
            <div class="card" style="border: none; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-radius: 10px;">      
                <div class="card-body text-center">      
                    <img src="https://img.icons8.com/ios-filled/50/000000/handshake.png" alt="Dukungan Petani" style="border-radius: 10px; width: 50px; height: 50px;" />      
                    <h5 class="card-title" style="font-size: 1.5rem; color: #6f4c3e;">Dukungan Petani</h5>      
                    <p class="card-text" style="font-size: 1.2rem; color: #333;">Kami mendukung petani lokal dengan membeli langsung dari mereka.</p>      
                </div>      
            </div>      
        </div>      
        <div class="col-md-4 text-center">      
            <div class="card" style="border: none; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-radius: 10px;">      
                <div class="card-body text-center">      
                    <img src="https://img.icons8.com/ios-filled/50/000000/checked.png" alt="Kualitas Terbaik" style="border-radius: 10px; width: 50px; height: 50px;" />      
                    <h5 class="card-title" style="font-size: 1.5rem; color: #6f4c3e;">Kualitas Terbaik</h5>      
                    <p class="card-text" style="font-size: 1.2rem; color: #333;">Setiap cangkir kopi kami menjamin kualitas dan rasa yang luar biasa.</p>      
                </div>      
            </div>      
        </div>      
    </div>      
</div>      


  
       <!-- Story Section -->    
<div class="story-section" id="story" style="background-color: #f5f0e1; padding: 40px 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">    
    <h2 class="text-center" style="font-weight: 600; color: #6f4c3e;">Cerita Kami</h2>    
    <h4 class="text-muted text-center" style="color: #6f4c3e;">"Kisah di Balik Setiap Cangkir Kopi"</h4>    
    <p style="text-align: justify; color: #333;">Maestro Coffee Supply didirikan dengan semangat untuk menyajikan kopi berkualitas tinggi dari berbagai daerah di Indonesia. Kami percaya bahwa setiap cangkir kopi memiliki cerita dan keunikan tersendiri. Dengan pengalaman bertahun-tahun dalam industri kopi, kami berkomitmen untuk memberikan pengalaman terbaik bagi setiap pecinta kopi.</p>    
    <p style="text-align: justify; color: #333;">Kami didirikan pada tahun 2020 oleh sekelompok pecinta kopi yang ingin membawa cita rasa kopi Indonesia ke seluruh dunia. Sejak saat itu, kami telah berkomitmen untuk mendukung pertanian berkelanjutan dan memberikan pengalaman kopi yang otentik.</p>    
    <p style="text-align: justify; color: #333;">Setiap biji kopi kami dipetik dengan tangan oleh petani yang terlatih, memastikan hanya biji terbaik yang dipilih. Setelah itu, biji kopi diproses dengan hati-hati menggunakan metode tradisional dan modern untuk menjaga cita rasa dan aroma aslinya.</p>    
    <p style="text-align: justify; color: #333;">Kami percaya pada keberlanjutan dan mendukung petani lokal dengan memberikan harga yang adil untuk hasil panen mereka. Dengan cara ini, kami tidak hanya menyediakan kopi berkualitas tinggi, tetapi juga membantu meningkatkan kesejahteraan komunitas lokal.</p>    
  
    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHxjb2ZmZWV8ZW58MHx8fHwxNjc4NDc2NDc2" alt="Proses Pemetikan Kopi" class="img-fluid mt-3" style="border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">    
  
    <h4 class="mt-4 text-center" style="color: #6f4c3e;">Cerita dari Petani Kami</h4>    
    <div class="card text-center" style="border: none; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); border-radius: 10px; margin: 20px auto; max-width: 600px;">    
        <div class="card-body">    
            <p style="font-style: italic; color: #333;">"Bekerja sama dengan Maestro Coffee Supply telah membantu kami mendapatkan penghasilan yang lebih baik dan meningkatkan kualitas hidup kami."</p>    
            <p style="color: #6f4c3e;">- <strong>Joko, Petani Kopi</strong></p>    
        </div>    
    </div>    
</div>    

  
         <!-- Marketing Section -->  
         <div class="marketing-section" style="background-color: #e9ecef; padding: 40px 20px;">  
            <h2 class="text-center" style="font-weight: 600;">Keunggulan Kami</h2>  
            <ul class="list-unstyled">  
                <li class="text-center mb-3">  
                    <div style="display: inline-block; text-align: center;">  
                        <img src="https://img.icons8.com/ios-filled/50/000000/organic-food.png" alt="Kopi 100% Organik" style="width: 50px; height: 50px;" />  
                        <strong>Kopi 100% Organik:</strong> Kami hanya menggunakan biji kopi yang ditanam secara organik tanpa pestisida.  
                    </div>  
                </li>  
                <li class="text-center mb-3">  
                    <div style="display: inline-block; text-align: center;">  
                        <img src="https://img.icons8.com/ios-filled/50/000000/taste.png" alt="Rasa yang Unik" style="width: 50px; height: 50px;" />  
                        <strong>Rasa yang Unik:</strong> Setiap produk kami memiliki profil rasa yang berbeda, mencerminkan daerah asalnya.  
                    </div>  
                </li>  
                <li class="text-center mb-3">  
                    <div style="display: inline-block; text-align: center;">  
                        <img src="https://img.icons8.com/ios-filled/50/000000/delivery.png" alt="Pengiriman Cepat" style="width: 50px; height: 50px;" />  
                        <strong>Pengiriman Cepat:</strong> Kami menjamin pengiriman cepat dan aman untuk setiap pesanan.  
                    </div>  
                </li>  
                <li class="text-center mb-3">  
                    <div style="display: inline-block; text-align: center;">  
                        <img src="https://img.icons8.com/ios-filled/50/000000/loyalty-card.png" alt="Program Loyalitas" style="width: 50px; height: 50px;" />  
                        <strong>Program Loyalitas:</strong> Bergabunglah dengan program loyalitas kami untuk mendapatkan diskon dan penawaran eksklusif.  
                    </div>  
                </li>  
            </ul>  
            <div class="text-center mt-4">  
                <a href="#products" class="btn btn-primary" style="border-radius: 20px;">Lihat Produk Kami</a>  
            </div>  
        </div>  
  
        <h2 class="text-center my-4" id="products">Katalog Produk Kopi</h2>  
        <div class="row">  
            @foreach($products as $product)  
                <div class="col-md-4 mb-4">  
                    <div class="product-card" data-toggle="modal" data-target="#productModal{{ $loop->index }}">  
                        <img src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}" class="product-image">  
                        <div class="p-3">  
                            <h5>{{ $product['name'] }}</h5>  
                            <p>Harga: Rp {{ number_format($product['price'], 0, ',', '.') }}</p>  
                            <p>{{ $product['description'] }}</p>  
                        </div>  
                    </div>  
                </div>  
            @endforeach  
        </div>  
  
        <!-- Customer Testimonials Slider -->  
        <div id="testimonialCarousel" class="carousel slide my-4" data-ride="carousel">  
            <div class="carousel-inner">  
                <div class="carousel-item active">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Kopi dari Maestro Coffee Supply adalah yang terbaik! Rasa dan kesegarannya tidak ada duanya."</p>  
                            <h5 class="card-title">- Sarah</h5>  
                        </div>  
                    </div>  
                </div>  
                <div class="carousel-item">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Saya suka variasi kopi yang ditawarkan. Setiap jenis memiliki cita rasa dan aroma yang unik!"</p>  
                            <h5 class="card-title">- John</h5>  
                        </div>  
                    </div>  
                </div>  
                <div class="carousel-item">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Pelayanan pelanggan di sini luar biasa! Mereka benar-benar peduli dengan pelanggan dan produk mereka."</p>  
                            <h5 class="card-title">- Emily, Ibu Rumah Tangga</h5>  
                        </div>  
                    </div>  
                </div>  
                <div class="carousel-item">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Saya memesan berbagai kopi untuk kantor, dan semua orang menyukainya! Sangat direkomendasikan!"</p>  
                            <h5 class="card-title">- Michael</h5>  
                        </div>  
                    </div>  
                </div>  
                <div class="carousel-item">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Layanan langganan mereka sangat menguntungkan! Kopi segar diantar ke rumah setiap bulan!"</p>  
                            <h5 class="card-title">- Jessica</h5>  
                        </div>  
                    </div>  
                </div>  
                <div class="carousel-item">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <p class="card-text">"Saya menghargai komitmen mereka terhadap keberlanjutan dan dukungan untuk petani lokal. Teruskan kerja bagus ini!"</p>  
                            <h5 class="card-title">- David</h5>  
                        </div>  
                    </div>  
                </div>  
            </div>  
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">  
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>  
                <span class="sr-only">Sebelumnya</span>  
            </a>  
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">  
                <span class="carousel-control-next-icon" aria-hidden="true"></span>  
                <span class="sr-only">Selanjutnya</span>  
            </a>  
        </div>  
  
        <!-- Call to Action Section -->    
<div class="cta-section text-center my-4" style="background-color: #f5f0e1; padding: 40px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">    
    <h3 style="color: #6f4c3e;">Daftar untuk Mendapatkan Penawaran Spesial!</h3>    
    <p style="color: #6f4c3e; font-size: 1.2rem;">Bergabunglah dengan program member kami dan nikmati diskon eksklusif serta penawaran menarik setiap bulan!</p>  
    <form style="max-width: 400px; margin: auto;">    
        <input type="email" class="form-control" placeholder="Masukkan email Anda" required style="border-radius: 5px; border: 1px solid #6f4c3e;">    
        <button type="submit" class="btn btn-success mt-2" style="background-color: #6f4c3e; border: none;">Daftar</button>    
    </form>    
    <div class="mt-4">  
        <img src="https://img.icons8.com/ios-filled/100/000000/membership.png" alt="Program Member" style="width: 100px; height: 100px;"/>  
        <p style="color: #6f4c3e; font-size: 1rem;">Dapatkan akses ke program member dan nikmati harga spesial!</p>  
    </div>  
</div>  

  
        <!-- Modal untuk menampilkan detail produk -->  
        @foreach($products as $product)  
            <div class="modal fade" id="productModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="productModalLabel{{ $loop->index }}" aria-hidden="true">  
                <div class="modal-dialog modal-lg" role="document">  
                    <div class="modal-content">  
                        <div class="modal-header">  
                            <h5 class="modal-title" id="productModalLabel{{ $loop->index }}">{{ $product['name'] }}</h5>  
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                                <span aria-hidden="true">&times;</span>  
                            </button>  
                        </div>  
                        <div class="modal-body">  
                            <img src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}" class="img-fluid mb-3" style="width: 100%; height: auto; object-fit: contain;">  
                            <p>{{ $product['description'] }}</p>  
                            <h6>Varian:</h6>  
                            <ul>  
                                @foreach($product['variants'] as $variant)  
                                    <li>{{ $variant }}</li>  
                                @endforeach  
                            </ul>  
                        </div>  
                        <div class="modal-footer">  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                            <button class="btn btn-primary">Beli Sekarang</button>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        @endforeach  
  
      <!-- Modal untuk Login -->  
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="loginModalLabel">Login</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                    <span aria-hidden="true">&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <form method="POST" action="{{ route('login') }}">  
                    @csrf <!-- Token CSRF untuk keamanan -->  
                    <div class="form-group">  
                        <label for="email">Email address</label>  
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password</label>  
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>  
                    </div>  
                    <!-- Menampilkan pesan kesalahan jika ada -->  
                    @if ($errors->any())  
                        <div class="alert alert-danger">  
                            <ul>  
                                @foreach ($errors->all() as $error)  
                                    <li>{{ $error }}</li>  
                                @endforeach  
                            </ul>  
                        </div>  
                    @endif  
                    <button type="submit" class="btn btn-primary">Login</button>  
                </form>  
            </div>  
        </div>  
    </div>  
</div>

<!-- Modal untuk Registrasi -->  
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="registerModalLabel">Registrasi</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                    <span aria-hidden="true">&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <form method="POST" action="{{ route('register') }}">  
                    @csrf <!-- Token CSRF untuk keamanan -->  
                    <div class="form-group">  
                        <label for="name">Nama</label>  
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="email">Email address</label>  
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password</label>  
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="password_confirmation">Konfirmasi Password</label>  
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>  
                    </div>  
                    <!-- Menampilkan pesan kesalahan jika ada -->  
                    @if ($errors->any())  
                        <div class="alert alert-danger">  
                            <ul>  
                                @foreach ($errors->all() as $error)  
                                    <li>{{ $error }}</li>  
                                @endforeach  
                            </ul>  
                        </div>  
                    @endif  
                    <button type="submit" class="btn btn-primary">Daftar</button>  
                </form>  
            </div>  
        </div>  
    </div>  
</div>  


        <!-- Scroll to Top Button -->  
        <button id="scrollToTopBtn" class="btn btn-primary" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">  
            ↑  
        </button>  
  
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>  
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  
        <script>  
            // Mendapatkan tombol  
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");  
  
            // Menampilkan tombol saat menggulir ke bawah  
            window.onscroll = function() {  
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {  
                    scrollToTopBtn.style.display = "block";  
                } else {  
                    scrollToTopBtn.style.display = "none";  
                }  
            };  
  
            // Menggulung kembali ke atas saat tombol diklik  
            scrollToTopBtn.onclick = function() {  
                window.scrollTo({  
                    top: 0,  
                    behavior: "smooth" // Menggulung dengan halus  
                });  
            };  
        </script>  
       <footer class="text-center py-4" style="background-color: #f5f0e1; color: #6f4c3e;">    
    <div class="container">    
        <p>&copy; 2025 Maestro Coffee Supply. Semua hak dilindungi.</p>    
        <ul class="list-inline">    
            <li class="list-inline-item">    
                <a href="#about" class="text-dark">Tentang Kami</a>    
            </li>    
            <li class="list-inline-item">    
                <a href="#products" class="text-dark">Katalog Produk</a>    
            </li>    
            <li class="list-inline-item">    
                <a href="#login" data-toggle="modal" data-target="#loginModal" class="text-dark">Login</a>    
            </li>    
            <li class="list-inline-item">    
                <a href="mailto:info@maestrocoffeesupply.com" class="text-dark">Kontak</a>    
            </li>    
        </ul>    
        <div>    
            <a href="https://www.facebook.com" target="_blank" class="text-dark mx-2">    
                <img src="https://img.icons8.com/ios-filled/24/6f4c3e/facebook-new.png" alt="Facebook" />    
            </a>    
            <a href="https://www.instagram.com" target="_blank" class="text-dark mx-2">    
                <img src="https://img.icons8.com/ios-filled/24/6f4c3e/instagram-new.png" alt="Instagram" />    
            </a>    
            <a href="https://www.twitter.com" target="_blank" class="text-dark mx-2">    
                <img src="https://img.icons8.com/ios-filled/24/6f4c3e/twitter-squared.png" alt="Twitter" />    
            </a>    
        </div>    
    </div>    
</footer>    

    </div>  
</body>  
</html>  
