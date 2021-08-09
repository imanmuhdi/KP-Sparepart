<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <style>
        .login-page{
            display: flex;
            align-items: stretch;
            justify-content: left;
            height: 100vh;
        }
        .card{
            border-radius: 0;
            color: #0061a8;
            height: 100vh;
            width: 30%;
        }

        .card img{
            height: 100vh;
            width: 100%;
        }

        .card{
            width: 100%;
        }
        
        .login{
            width: 40%;
            padding: 0 40px;
            display: flex;
            justify-content: center;
            z-index: 2;
        }

        .login p{
            font-size: 20px;
            font-weight: lighter; 
        }

        form label{
            margin-top: 20px;
        }

        .tombol{
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .login h4{
            margin-bottom: 20px;
        }

        .btn-daftar{
            border: 1px solid #0061a8;
            color: #0061a8;
            margin-left: 20px;
        }

        .btn-daftar:hover{
            background-color: #0061a8;
            color: white;
        }

        .btn-login{
            background-color: #0061a8;
            color: white;
        }

        .btn-login:hover{
            background-color: #0061a9;
            color: white;
        }

        .about{
            position: fixed;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            padding-right: 50px;
            z-index: 1;
        }

        .about a{
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>
<body class="d-flex flex-row">
    <div class="card login">
        <h4>Masuk</h4>
        <p>Bagi kamu yang sudah terdaftar, silahkan masuk</p>
        <form action="<?php echo site_url('home/proseslogin')?>" method="post">
            <label>Email</label>
            <input type="email" class="form-control" name="username" required>
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
            <div class="tombol">
                <input type="submit" class="btn btn-login" value="Masuk">
                <a href="<?php echo site_url('home/daftar')?>" class="btn btn-daftar">Daftar</a>
            </div>
        </form>
    </div>
    <div class="card">
       <img src="<?php echo site_url('../assets/image/login-background.jpg')?>">
    </div>
    <div class="about">
        <a href="<?php echo site_url('Home/aboutus')?>" class="btn btn-primary">Hubungi Kami</a>
    </div>
</body>
</html>