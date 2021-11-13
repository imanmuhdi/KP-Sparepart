<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        body{
            background: #8CD0F4;
            color: black;
        }
        label{
            width:160px;
            clear:left;
            text-align:left;
            padding-right:10px;
        }
        .font{
            align-self: center;
            padding-top: 25px;
            font-family: cursive;
            font-size: 35px;
            font-weight: bold;
        }
        .container{
            color: white;
            background: #1F2351;
        }
    </style>
</head>
<body >
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3 class="font">TAMBAH SPAREPART</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('sparepart/prosestambah'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                    <div class="card-header bg-primary" style="font-weight: bold;">Input Kode, Nama dan Tipe Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Kode Part</label>
                                <input type="text" name="kodesp" required="Kode Sparepart" class="form-control">
                            <label>Nama Part</label>
                                <input type="text" name="namasp" required="Nama Sparepart" class="form-control">
                            <label>Tipe</label>
                                <input type="text" name="tipesp" required class="form-control">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-success" style="font-weight: bold;">Input Saldo Awal, Masuk, Keluar, Saldo Akhir, Stok Minimal Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Stok Minimal</label>
                                <input type="number" name="minimal" required class="form-control">
                            <label>Saldo Awal</label>
                                <input type="number" name="saldoawal" required class="form-control">
                            <label>Masuk</label>
                                <input type="number" name="masuk" required class="form-control">
                            <label>Keluar</label>
                                <input type="number" name="keluar" required class="form-control">
                            <label>Saldo Akhir</label>
                                <input type="number" name="saldoakhir" required class="form-control">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-warning" style="font-weight: bold;">Input Foto Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Foto Part</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="foto" type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Pilih foto</label>
                                    </div>
                                </div>
                        </div>
                </div>
                <br>
                    <input type="submit" value="Tambah Sparepart" class="btn btn-success float-right">
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-left">Kembali</button>
                    <br>
                <br>
            </form>
        </div>
    </div>
</body>
</html>