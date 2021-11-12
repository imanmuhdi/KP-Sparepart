<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mesin</title>
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
        label{
            font-size: 20px;
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
        <h3>Tambah Mesin</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('mesin/prosestambah'); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="text" name="idm" required="Kode Sparepart" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Jam Operasi</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="number" name="jom" required="Nama Sparepart" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Down Time</label>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="number" name="dtm" required class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Target Down</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="tdm" required class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tipe Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="tmm" required class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Merk Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="mmm" required class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>No Mesin</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="nmm" required" class="form-control"> 
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tahun</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="tm" required class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Tambah Mesin" class="btn btn-success" class="form-control">
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