<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nota Tanpa Sparepart</title>
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
            color: white;
            padding-top: 25px;
            font-family: cursive;
            font-size: 35px;
            font-weight: bold;
        }
        .container{
            background: #1F2351;
        }
    </style>
</head>
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3 class="font">EDIT NOTA</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('Nota/prosesUpdate2'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                    <div class="card-header bg-dark" style="font-weight: bold;">Nomor Nota</div>
                        <div class="card-body text-dark">
                            <label>Nomor</label>
                                <input type="text" name="no" required class="form-control" value="<?php echo $tb_perbaikan2->no?>" readonly>
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-primary" style="font-weight: bold;">ID dan Merk Mesin</div>
                        <div class="card-body text-dark">
                            <label>ID Mesin</label>
                                <input type="text" name="id_mesin" required class="form-control" value="<?php echo $tb_perbaikan2->id_mesin?>" readonly>
                            <br>
                            <label>Merk Mesin</label>
                                <input type="text" name="merk_m" required class="form-control" value="<?php echo $tb_perbaikan2->merk_m?>" readonly>
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-success" style="font-weight: bold;">Nama Instansi</div>
                        <div class="card-body text-dark">
                            <label>Nama Instansi</label>
                                <input type="text" name="instansi" required class="form-control" value="<?php echo $tb_perbaikan2->instansi?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-info" style="font-weight: bold;">Masalah, Penyebab dan Solusi Perbaikan Kerusakan</div>
                        <div class="card-body text-dark">
                            <label>Kerusakan Masalah</label>
                                <input type="text" name="d_kerusakan" required class="form-control" value="<?php echo $tb_perbaikan2->d_kerusakan?>">
                            <br>
                            <label class="pad">Penyebab Kerusakan</label>
                                <input type="text" name="d_penyebab" required class="form-control" value="<?php echo $tb_perbaikan2->d_penyebab?>">
                            <br>
                            <label class="pad">Perbaikan</label>
                                <input type="text" name="d_perbaikan" required class="form-control" value="<?php echo $tb_perbaikan2->d_perbaikan?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-secondary" style="font-weight: bold;">Nama Pengaju, Penyetuju dan Tanggal</div>
                        <div class="card-body text-dark">
                            <label>Diajukan Oleh</label>
                                <input type="text" name="pengaju" required class="form-control" value="<?php echo $tb_perbaikan2->pengaju?>">
                            <br>
                            <label>Disetujui Oleh</label>
                                <input type="text" name="penyetuju" required class="form-control" value="<?php echo $tb_perbaikan2->penyetuju?>">
                            <br>
                            <label>Tanggal</label>
                                <input type="date" name="tanggal" required class="form-control" value="<?php echo $tb_perbaikan2->tanggal?>">
                        </div>
                </div>
                <br>
                    <input type="submit" value="Edit Mesin" class="btn btn-success float-right" >
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-left">Kembali</button>
                    <br>
                <br>
            </form>
        </div>
    </div>
</body>
</html>