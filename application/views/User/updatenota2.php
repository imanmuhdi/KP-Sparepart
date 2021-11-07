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
        <h3>Edit Nota</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('Nota/prosesUpdate2'); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label>Nomor</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="no" required value="<?php echo $tb_perbaikan2->no?>" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>ID Mesin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="id_mesin" required value="<?php echo $tb_perbaikan2->id_mesin?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Merk Mesin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="merk_m" required value="<?php echo $tb_perbaikan2->merk_m?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Instansi</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="instansi" required value="<?php echo $tb_perbaikan2->instansi?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Kerusakan Masalah</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="d_kerusakan" required value="<?php echo $tb_perbaikan2->d_kerusakan?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Penyebab Kerusakan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="d_penyebab" required value="<?php echo $tb_perbaikan2->d_penyebab?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Perbaikan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="d_perbaikan" required value="<?php echo $tb_perbaikan2->d_perbaikan?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Diajukan Oleh</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="pengaju" required value="<?php echo $tb_perbaikan2->pengaju?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tanggal</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="date" name="tanggal" required value="<?php echo $tb_perbaikan2->tanggal?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Disetujui Oleh</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
<<<<<<< HEAD
                            <input type="text" name="deskripsi" required value="<?php echo $tb_perbaikan2->d_penyebab?>">
=======
                            <input type="text" name="penyetuju" required value="<?php echo $tb_perbaikan2->penyetuju?>">
>>>>>>> 32c8ea247e88daeb05fc1cc3b4e0ea5793ea0a4d
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Edit Mesin" class="btn btn-success" >
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