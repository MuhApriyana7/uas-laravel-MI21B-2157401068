<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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
    .container {
        max-width: 1000px;
        margin: 50px;
        text-align: center;
        padding: 50px;
        background-color: rgba(255, 255, 255, 0.3); 
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn-primary {
            background-color: rgba(255, 255, 255, 0.3); 
            border-color: white;
            font-size: 18px;
            padding: 5px 20px;
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
<body>

<div class="container">
    <h1 class="display-4">Selamat Datang {{ auth()->user()->name }}</h1>
    <p class="lead">{{ auth()->user()->email }}</p>
   <a href="/halamanawal" class="btn btn-primary btn-block">Logout</a>
</div>

</body>
</html>``