<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nota Dengan Sparepart</title>
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
            <form action="<?php echo site_url('Nota/prosesUpdate1'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                    <div class="card-header bg-dark" style="font-weight: bold;">Nomor Nota</div>
                        <div class="card-body text-dark">
                            <label>Nomor</label>
                                <input type="text" name="no" required class="form-control" value="<?php echo $tb_perbaikan1->no?>" readonly>
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-primary" style="font-weight: bold;">ID dan Merk Mesin</div>
                        <div class="card-body text-dark">
                            <label>ID Mesin</label>
                                <input type="text" name="id_mesin" required class="form-control" value="<?php echo $tb_perbaikan1->id_mesin?>" readonly>
                            <br>
                            <label>Merk Mesin</label>
                                <input type="text" name="merk" required class="form-control" value="<?php echo $tb_perbaikan1->merk_m?>" readonly>
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-success" style="font-weight: bold;">Kode, Type dan Jumlah Sparepart</div>
                        <div class="card-body text-dark">
                            <label>Kode Sparepart</label>
                                <input type="text" name="kd_part" required class="form-control" value="<?php echo $tb_perbaikan1->kd_part?>" readonly>
                            <br>
                            <label>Type Sparepart</label>
                                <input type="text" name="type" required class="form-control" value="<?php echo $tb_perbaikan1->type?>" readonly>
                            <br>
                            <label>Jumlah Sparepart</label>
                                <input type="number" name="jml_part" required class="form-control" value="<?php echo $tb_perbaikan1->jml_part?>" min=1 max=999>
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-info" style="font-weight: bold;">Masalah, Penyebab dan Solusi Perbaikan Kerusakan</div>
                        <div class="card-body text-dark">
                            <label>Kerusakan Masalah</label>
                                <input type="text" name="deskripsi" required class="form-control" value="<?php echo $tb_perbaikan1->deskripsi?>">
                            <br>
                            <label class="pad">Penyebab Kerusakan</label>
                                <input type="text" name="deskripsi2" required class="form-control" value="<?php echo $tb_perbaikan1->deskripsi2?>">
                            <br>
                            <label class="pad">Perbaikan</label>
                                <input type="text" name="perbaikan" required class="form-control" value="<?php echo $tb_perbaikan1->perbaikan?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-warning" style="font-weight: bold;">Input Hasil dan Lokasi Perbaikan</div>
                        <div class="card-body text-dark">
                            <label class="pad">Hasil Perbaikan</label>
                                <input type="text" name="hasil" required class="form-control" value="<?php echo $tb_perbaikan1->hasil?>">
                            <br>
                            <label>Lokasi</label>
                                <input type="text" name="lokasi" required class="form-control" value="<?php echo $tb_perbaikan1->lokasi?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-danger" style="font-weight: bold;">Waktu Mulai dan Selesai Perbaikan</div>
                        <div class="card-body text-dark">
                            <label>Mulai Perbaikan</label>
                                <input type="time" name="mulai" required class="form-control" value="<?php echo $tb_perbaikan1->mulai?>">
                            <br>
                            <label>Selesai Perbaikan</label>
                                <input type="time" name="selesai" required class="form-control" value="<?php echo $tb_perbaikan1->selesai?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-secondary" style="font-weight: bold;">Input Nama Pengaju, Pelaksana, Penyetuju dan Tanggal</div>
                        <div class="card-body text-dark">
                            <label>Diajukan Oleh</label>
                                <input type="text" name="oleh" required class="form-control" value="<?php echo $tb_perbaikan1->oleh?>">
                            <br>
                            <label>Disetujui Oleh</label>
                                <input type="text" name="penyetuju" required class="form-control" value="<?php echo $tb_perbaikan1->penyetuju?>">
                            <br>
                            <label>Dilaksanakan Oleh</label>
                                <input type="text" name="pelaksana" required class="form-control" value="<?php echo $tb_perbaikan1->pelaksana?>">
                            <br>
                            <label>Tanggal</label>
                                <input type="date" name="tgl" required class="form-control" value="<?php echo $tb_perbaikan1->tgl?>">
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