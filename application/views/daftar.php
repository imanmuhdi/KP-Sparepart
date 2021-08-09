<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
            padding: 40px;
            display: flex;
            justify-content: center;
            z-index: 2;
        }

        .login p{
            font-size: 16px;
            font-weight: lighter; 
        }

        form label{
            margin-top: 10px;
        }

        .tombol{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .login h4{
            margin-bottom: 10px;
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

        input[type="file"]{
            border: none;
        }

        a:hover{
            text-decoration: none;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>
<body class="d-flex flex-row">
    <div class="card login">
        <h4>Daftar</h4>
        <p>Harap isi data diri dengan benar!</p>
        <form id="form" onSubmit="return doSubmit();" action="<?php echo site_url('home/prosesdaftar')?>" method="post" enctype="multipart/form-data">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required>
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" required>
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="Password" required>
            <div id="msgPass"></div>
            <label>Konfirmasi Password</label>
            <input type="password" class="form-control" name="konfirmasi_password" id="ConfirmPassword" required>
            <div id="msgConfirm"></div>
            <label>Foto KTP</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" required>
                <label class="custom-file-label" for="customFileLang">Pilih File</label>
            </div>
            <div class="tombol">
                <input type="submit" class="btn btn-login" value="Daftar">
            </div>
            <div id="errorSubmit"></div>
        </form>
        <a href="<?php echo site_url('home/login')?>" class="text-center mt-3">Masuk</a>
    </div>
    <div class="card">
       <img src="<?php echo site_url('../assets/image/login-background.jpg')?>">
    </div>
    <div class="about">
        <a href="<?php echo site_url('Home/aboutus')?>" class="btn btn-primary">Hubungi Kami</a>
    </div>

    <script>
        var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        $(document).ready(function(){
            $("#Password").keyup(function(){
                if(!strongRegex.test($("#Password").val())){
                    $("#msgPass").html("Password lemah").css("color","red");
                }else{
                    $("#msgPass").html("");
                }
            });

            $("#ConfirmPassword").keyup(function(){
                if($("#Password").val() != $("#ConfirmPassword").val()){
                    $("#msgConfirm").html("Password do not match").css("color","red");
                }else{
                    $("#msgConfirm").html("");
                }
            });
        });

        function validation(){
            if(!strongRegex.test($("#Password").val())){
                return false;
            }

            if($("#Password").val() != $("#ConfirmPassword").val()){
                return false;
            }

            return true;
        }

        function doSubmit(){
            if(validation()){
                $('#form').submit();
            }else{
                $('#errorSubmit').html("Terjadi kesalahan input").css("color","red");
                return false;
            }
        }
    </script>
</body>
</html>