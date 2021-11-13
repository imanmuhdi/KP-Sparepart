<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sparepart</title>
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
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3 class="font">EDIT SPAREPART</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('sparepart/prosesupdate'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                    <div class="card-header bg-primary" style="font-weight: bold;">Input Kode, Nama dan Tipe Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Kode Part</label>
                                <input type="text" name="kodesp" required="Kode Sparepart" value="<?php echo $tb_sparepart->kd_part?>" class="form-control" readonly>
                            <label>Nama Part</label>
                                <input type="text" name="namasp" required="Nama Sparepart" value="<?php echo $tb_sparepart->nama_part?>" class="form-control">
                            <label>Tipe</label>
                                <input type="text" name="tipesp" required value="<?php echo $tb_sparepart->type?>" class="form-control">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-success" style="font-weight: bold;">Input Saldo Awal, Masuk, Keluar, Saldo Akhir, Stok Minimal Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Stok Minimal</label>
                                <input type="number" name="minimal" required value="<?php echo $tb_sparepart->stock_minimal?>" class="form-control">
                            <label>Saldo Awal</label>
                                <input type="number" name="saldoawal" required value="<?php echo $tb_sparepart->saldo_awal?>" class="form-control">
                            <label>Masuk</label>
                                <input type="number" name="masuk" required value="<?php echo $tb_sparepart->masuk?>" class="form-control">
                            <label>Keluar</label>
                                <input type="number" name="keluar" required value="<?php echo $tb_sparepart->keluar?>" class="form-control">
                            <label>Saldo Akhir</label>
                                <input type="number" name="saldoakhir" required value="<?php echo $tb_sparepart->saldo_akhir?>" class="form-control">
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
                    <input type="submit" value="Edit Sparepart" class="btn btn-success float-right">
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-left">Kembali</button>
                    <br>
                <br>
            </form>
        </div>
    </div>
</body>
</html>