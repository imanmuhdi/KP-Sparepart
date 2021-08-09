<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Calon</title>
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
        <h3>Tambah Calon</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('calon/prosesupdate/'.$calon->id_calon); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            <label>Nama Calon Presiden dan Wakil Presiden</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="nama" required="Nama Calon" value="<?php echo $calon->nama_calon?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label class="pad">Foto Pasangan Calon</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="file" name="foto" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Visi</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="10" cols="100" name="visi" required="Visi"><?php echo $calon->visi?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Misi</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="10" cols="100" name="misi" required="Misi"><?php echo $calon->misi?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Update Calon" class="btn btn-success">
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