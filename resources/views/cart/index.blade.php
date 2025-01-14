<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Keranjang Belanja</title>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
</head>  
<body>  
    <div class="container">  
        <h1 class="text-center my-4">Keranjang Belanja</h1>  
        <table class="table">  
            <thead>  
                <tr>  
                    <th>Nama Produk</th>  
                    <th>Harga</th>  
                    <th>Jumlah</th>  
                    <th>Aksi</th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach($carts as $cart)  
                    <tr>  
                        <td>{{ $cart->product_name }}</td>  
                        <td>Rp {{ number_format($cart->price, 0, ',', '.') }}</td>  
                        <td>{{ $cart->quantity }}</td>  
                        <td>  
                            <form action="{{ url('/cart/remove/'.$cart->id) }}" method="POST">  
                                @csrf  
                                @method('DELETE')  
                                <button type="submit" class="btn btn-danger">Hapus</button>  
                            </form>  
                        </td>  
                    </tr>  
                @endforeach  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>  
