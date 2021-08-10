<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbaikan Mesin Dengan Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3>Perbaikan Mesin Dengan Sparepart</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('mesin/perbaikan1'); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                            <select name="id_mesin">
                                <option value='' disabled selected>Pilih Mesin</option>";
                                <?php foreach($tb_mesin as $tbm) : ?>
                                <option value="<?php echo $tbm->id_mesin;?>"> <?php echo $tbm->mesin_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Kode Sparepart</label>
                            <select name="kd_part">
                                <option value='' disabled selected>Pilih Sparepart</option>";
                                <?php foreach($tb_sparepart as $tbs) : ?>
                                <option value="<?php echo $tbs->kd_part;?>"> <?php echo $tbs->kd_part; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Deskripsi</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="10" cols="100" name="deskripsi" required="Deskripsi"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Submit" class="btn btn-success">
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