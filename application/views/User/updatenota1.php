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
            <form action="<?php echo site_url('Nota/prosesUpdate1'); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label>Nomor</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="no" required value="<?php echo $tb_perbaikan1->no?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>ID Mesin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="id_mesin" required value="<?php echo $tb_perbaikan1->id_mesin?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Kode Sparepart</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="kd_part" required value="<?php echo $tb_perbaikan1->kd_part?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Jumlah Sparepart</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="number" name="jml_part" required value="<?php echo $tb_perbaikan1->jml_part?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Deskripsi</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="deskripsi" required value="<?php echo $tb_perbaikan1->deskripsi?>">
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