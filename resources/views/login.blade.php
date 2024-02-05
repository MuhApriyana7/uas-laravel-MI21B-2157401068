<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1490730141103-6cac27aaab94');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center; /* Mengatur posisi vertikal ke tengah */
            justify-content: center; /* Mengatur posisi horizontal ke tengah */
            height: 100vh; /* Menggunakan tinggi viewport */
        }

        .btn-primary {
            background-color: rgba(255, 255, 255, 0.3); 
            border-color: white;
            font-size: 18px;
            padding: 12px 20px;
            color: black;
        }

        .btn-primary:hover {
            background-color: #4b0082; /* Warna latar belakang tombol ungu saat dihover */
            border-color: #4b0082; /* Warna garis pinggir tombol ungu saat dihover */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.3); /* Warna transparan untuk latar belakang card */
        }

    
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('danger'))
                        <p>{{ Session::get('danger') }}</p>
                        @endif
                        <h2 class="card-title text-center">Login</h2>
                        <form action="/postlogin" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <a href="/halamanawal" class="btn btn-primary btn-block">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
