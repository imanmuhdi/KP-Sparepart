<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbaikan Mesin Dengan Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
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
        <h3 class="font">PERBAIKAN MESIN DENGAN SPAREPART</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('perbaikan/prosestambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card text-white">
                        <div class="card-header bg-primary" style="font-weight: bold;">Input ID dan Merk Mesin</div>
                            <div class="card-body text-dark">
                                <label>ID Mesin</label>
                                    <select name="id" required class="form-control">
                                        <option value='' disabled selected>Pilih Mesin</option>
                                        <?php
                                        foreach ($tb_mesin->result() as $tbm) {
                                            echo '<option value="'.$tbm->id_mesin.'">'.$tbm->id_mesin.'</option>';
                                        }
                                        ?>
                                    </select>
                                <br>
                                <label>Merk Mesin</label>
                                    <select name="merk" required class="form-control">
                                        <option value='' disabled selected>Pilih Merk</option>
                                        <option value="Somet">Somet</option>
                                        <option value="Optimax">Optimax</option>
                                        <option value="Picanol">Picanol</option>
                                        <option value="Gama">Gama</option>
                                    </select>
                            </div>
                    </div>
                    <br>
                    <div class="card text-white">
                        <div class="card-header bg-success" style="font-weight: bold;">Input Kode, Type dan Jumlah Sparepart</div>
                            <div class="card-body text-dark">
                                <label>Kode Sparepart</label>
                                    <select name="kd" required class="form-control">
                                        <option value='' disabled selected>Pilih Sparepart</option>
                                        <?php
                                        foreach ($tb_sparepart->result() as $tbs) {
                                            echo '<option value="'.$tbs->kd_part.'">'.$tbs->kd_part.'</option>';
                                        }
                                        ?>
                                    </select>
                                <br>
                                <label>Type Sparepart</label>
                                    <select name="type" required class="form-control">
                                        <option value='' disabled selected>Pilih Type</option>
                                        <?php
                                        foreach ($tb_sparepart->result() as $tbs) {
                                            echo '<option value="'.$tbs->type.'">'.$tbs->type.'</option>';
                                        }
                                        ?>
                                    </select>
                                <br>
                                <label>Jumlah Sparepart</label>
                                    <input type="number" name="jml_part" required class="form-control">
                            </div>
                    </div>
                    <br>
                    <div class="card text-white">
                        <div class="card-header bg-info" style="font-weight: bold;">Input Masalah, Penyebab dan Solusi Perbaikan Kerusakan</div>
                            <div class="card-body text-dark">
                                <label class="pad">Kerusakan Masalah</label>
                                <br>
                                    <textarea rows="3" cols="80" name="deskripsi" required class="form-control"></textarea>
                                <br>
                                <label class="pad">Penyebab Kerusakan</label>
                                <br>
                                    <textarea rows="3" cols="80" name="deskripsi2" required class="form-control"></textarea>
                                <br>
                                <label>Perbaikan</label>
                                <br>
                                    <textarea rows="3" cols="80" name="perbaikan" required class="form-control"></textarea>
                            </div>
                    </div>
                    <br>
                    <div class="card text-white">
                        <div class="card-header bg-warning" style="font-weight: bold;">Input Hasil dan Lokasi Perbaikan</div>
                            <div class="card-body text-dark">
                                <label>Hasil Perbaikan</label>
                                <br>
                                    <input type="text" name="hasil" required class="form-control">
                                <br>
                                <label>Lokasi</label>
                                <br>
                                    <input type="text" name="lokasi" required class="form-control">
                            </div>
                    </div>
                    <br>
                    <div class="card text-white">
                        <div class="card-header bg-danger" style="font-weight: bold;">Input Waktu Mulai dan Selesai Perbaikan</div>
                            <div class="card-body text-dark">
                                <label>Mulai Perbaikan</label>
                                <br>
                                    <input type="time" name="mulai" required class="form-control">
                                <br>
                                <label>Selesai Perbaikan</label>
                                <br>
                                    <input type="time" name="selesai" required class="form-control">
                            </div>
                    </div>
                    <br>
                    <div class="card text-white">
                        <div class="card-header bg-secondary" style="font-weight: bold;">Input Nama Pengaju, Pelaksana, Penyetuju dan Tanggal</div>
                            <div class="card-body text-dark">
                                <label>Diajukan Oleh</label>
                                <br>
                                    <input type="text" name="oleh" required class="form-control">
                                <br>
                                <label>Disetujui Oleh</label>
                                <br>
                                    <input type="text" name="penyetuju" required class="form-control">
                                <br>
                                <label>Dilaksanakan Oleh</label>
                                <br>
                                    <input type="text" name="pelaksana" required class="form-control">
                                <br>
                                <label>Tanggal</label>
                                <br>
                                    <input type="date" name="tgl" required class="form-control">
                            </div>
                    </div>
                    <br>
                        <input type="submit" value="Submit" class="btn btn-success float-right">
                        <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-left">Kembali</button>
                        <br>
                    <br>
            </form>
        </div>
    </div>
</body>
</html>