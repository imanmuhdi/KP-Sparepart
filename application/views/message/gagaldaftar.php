<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagal Daftar</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <meta http-equiv="refresh" content="5; url=<?php echo site_url('home/login')?>">
    <style>
        .message{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body class="message">
    <div class="card text-center">
        <h1>Gagal Mendaftar!</h1>
        <hr>
        <p>Gagal daftar, terdapat kesalahan atau terdapat kesamaan nik saat melakukan input!<br>
        Tunggu 5 detik, website akan melakukan refresh otomatis . . .</p>
    </div>
</body>
</html>