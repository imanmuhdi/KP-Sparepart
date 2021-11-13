<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mesin</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
            body{
            background-image: linear-gradient(180deg, purple, #1946b9);
            color: black;
        }
        .content-wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
        }
        .pad{
            padding-top: 20px;
        }
        .logout{
            color: grey;
        }

        .logout:hover{
            text-decoration: none;
            color: rgb(200,200,200);
        }

        .content{
            padding: 0 20%;
        }
        label{
            font-size: 20px;
        }

        table{
            width: 100%;
        }

        td, input[type="text"], textarea{
            width: 100%;
        }

        .btn{
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .container{
            background-color: white;
        }
        label, h3{
            color:white;
        }
        .container{
            background-color: #161616;
        }
        .form-control{
            color: white;
            background-color: #282828;
        }
        .card-body{
            background-color: #161616;
        }
    </style>
</head>
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3>Tambah Mesin</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('mesin/prosestambah'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                        <div class="card-header bg-primary" style="font-weight: bold;">Input ID, Tipe, Merk, No, Tahun Mesin</div>
                            <div class="card-body text-dark">
                                <label>ID Mesin</label>
                                <input type="text" name="idm" required="Kode Sparepart" class="form-control">
                                <label>Tipe Mesin</label>
                                <input type="text" name="tmm" required class="form-control">
                                <label>Merk Mesin</label>
                                <input type="text" name="mmm" required class="form-control">
                                <label>No Mesin</label>
                                <input type="text" name="nmm" required" class="form-control"> 
                                <label>Tahun</label>
                                <input type="number" name="tm" required class="form-control">
                            </div>
                        </div>
                    <br>
                        <div class="card text-white">
                            <div class="card-header bg-success" style="font-weight: bold;">Input Jam Operasi, Down Time dan Target Down Time Mesin</div>
                                <div class="card-body text-dark">
                                    <label>Jam Operasi</label>
                                    <input type="number" name="jom" required="Nama Sparepart" class="form-control">
                                    <label>Down Time</label>
                                    <input type="number" name="dtm" required class="form-control">
                                    <label>Target Down</label>
                                    <input type="number" name="tdm" required class="form-control" step="0.01">
                                </div>
                            </div>
                            <input type="submit" value="Tambah Mesin" class="btn btn-success" class="form-control">
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-right">Kembali</button>
            </form>
        </div>
    </div>
</body>
</html>