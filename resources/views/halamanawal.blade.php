<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
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
            background-color: #4b0082;
            border-color: #4b0082;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.3); /* Warna transparan untuk latar belakang card */
        }``
        .card-title {
            color: purple;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Selamat Datang</h2>
                        <a href="/login" class="btn btn-primary btn-block">Login</a>
                        <a href="/daftar" class="btn btn-primary btn-block">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
