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
            background: #DCDCDC;
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

        table{
            width: 100%;
        }

        label{
            font-size: 20px;
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
        <h3>Edit Mesin</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('mesin/prosesupdate'); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="idm" required="Kode Sparepart" value="<?php echo $tb_mesin->id_mesin?>" class="form-control" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Jam Operasi</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="number" name="jom" required="Nama Sparepart" value="<?php echo $tb_mesin->jam_op?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Down Time</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="number" name="dtm" required value="<?php echo $tb_mesin->down_time?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Target Down</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="tdm" required value="<?php echo $tb_mesin->target_down?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tipe Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="tmm" required value="<?php echo $tb_mesin->type_m?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Merk Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="mmm" required value="<?php echo $tb_mesin->merk_m?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>No Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="nmm" required" value="<?php echo $tb_mesin->no_m?>" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tahun</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="tm" required value="<?php echo $tb_mesin->tahun?>" class="form-control">
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