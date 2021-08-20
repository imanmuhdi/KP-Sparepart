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
    </style>
</head>
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3>Edit Sparepart</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('sparepart/prosesupdate'); ?>" method="post" enctype="multipart/form-data">

                <table>
                    <tr>
                        <td>
                            <label>Kode Part</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="kodesp" required="Kode Sparepart" value="<?php echo $tb_sparepart->kd_part?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Nama Part</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="namasp" required="Nama Sparepart" value="<?php echo $tb_sparepart->nama_part?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tipe</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="tipesp" required value="<?php echo $tb_sparepart->type?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Saldo Awal</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="saldoawal" required value="<?php echo $tb_sparepart->saldo_awal?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Masuk</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="masuk" required value="<?php echo $tb_sparepart->masuk?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Keluar</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="keluar" required value="<?php echo $tb_sparepart->keluar?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Saldo Akhir</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="saldoakhir" required" value="<?php echo $tb_sparepart->saldo_akhir?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Stok Minimal</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="minimal" required value="<?php echo $tb_sparepart->stock_minimal?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Foto Part</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="file" name="foto">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Edit Sparepart" class="btn btn-success">
                        </td>
                        <td>
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-right">Kembali</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>