<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mesin</title>
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
        <h3 class="font">EDIT MESIN</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('mesin/prosesupdate'); ?>" method="post" enctype="multipart/form-data">
                <div class="card text-white">
                    <div class="card-header bg-primary" style="font-weight: bold;">Input ID, Tipe, Merk, No, Tahun Mesin</div>
                        <div class="card-body text-dark">
                            <label>ID Mesin</label>
                                <input type="text" name="idm" required="Kode Sparepart" value="<?php echo $tb_mesin->id_mesin?>" class="form-control" readonly>
                            <label>Tipe Mesin</label>
                                <input type="text" name="tmm" required class="form-control" value="<?php echo $tb_mesin->type_m?>">
                            <label>Merk Mesin</label>
                                <input type="text" name="mmm" required class="form-control" value="<?php echo $tb_mesin->merk_m?>">
                            <label>No Mesin</label>
                                <input type="text" name="nmm" required class="form-control" value="<?php echo $tb_mesin->no_m?>"> 
                            <label>Tahun</label>
                                <input type="number" name="tm" required class="form-control" value="<?php echo $tb_mesin->tahun?>">
                        </div>
                </div>
                <br>
                <div class="card text-white">
                    <div class="card-header bg-success" style="font-weight: bold;">Input Jam Operasi dan Target Down Time Mesin</div>
                        <div class="card-body text-dark">
                            <label>Jam Operasi</label>
                                <input type="number" name="jom" required="Nama Sparepart" class="form-control" value="<?php echo $tb_mesin->jam_op?>">
                            <label>Target Down (%)</label>
                                <input type="number" name="tdm" required class="form-control" value="<?php echo $tb_mesin->target_down?>" step="any">
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