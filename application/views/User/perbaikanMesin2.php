<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbaikan Mesin Tanpa Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        label {
    width:180px;
    clear:left;
    text-align:left;
    padding-right:10px;
    }
    </style>
</head>
<body>
    <div class="container" style="padding:40px 0; text-align: center;">
        <h3>Perbaikan Mesin Tanpa Sparepart</h3>
    </div>
    <div class="container">
        <div class="content">
            <form action="<?php echo site_url('perbaikan/prosestambah2'); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                            <select name="id" required>
                                <option value='' disabled selected>Pilih Mesin</option>";
                                <?php
                                foreach ($tb_mesin->result() as $tbm) {
                                    echo '<option value="'.$tbm->id_mesin.'">'.$tbm->id_mesin.'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Merk Mesin</label>
                            <select name="merk" required>
                                <option value='' disabled selected>Pilih Merk</option>
                                <option value="Somet">Somet</option>
                                <option value="Optimax">Optimax</option>
                                <option value="Picanol">Picanol</option>
                                <option value="Gama">Gama</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Nama Instansi</label>
                            <input type="text" name="instansi" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Kerusakan Masalah</label>
                            <input type="text" name="d_kerusakan" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Penyebab Kerusakan</label>
                            <input type="text" name="d_penyebab" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Perbaikan</label>
                            <input type="text" name="d_perbaikan" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Diajukan Oleh</label>
                            <input type="text" name="pengaju" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Disetujui Oleh</label>
                            <input type="text" name="penyetuju" required>
                        </td>
                    </tr>

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