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
            <form action="<?php echo site_url('perbaikan/prosestambah3'); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                            <select name="id">
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
                        <td colspan="2">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Nama Instansi</label>
                            <input type="text" name="nama">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Diajukan Oleh</label>
                            <input type="text" name="pengaju" required="Pengaju">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Kerusakan Masalah</label>
                            <input type="text" name="d_kerusakan" >
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Penyebab Kerusakan</label>
                            <input type="text" name="d_penyebab" >
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Perbaikan</label>
                            <input type="text" name="d_perbaikan" >
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <label>Hasil Perbaikan</label>
                            <input type="text" name="hasil" >
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <label>Mulai Perbaikan Pukul</label>
                            <input type="time" name="mulai" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Selesai Perbaikan Pukul</label>
                            <input type="time" name="selesai" >
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label>Disetujui</label>
                            <input type="text" name="penyetuju" >
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="2">
                            <label>Dilaksanakan Oleh</label>
                            <input type="text" name="pelaksana" >
                        </td>
                    </tr> 

                    <tr>
                        <td>
                            <label class="pad">Deskripsi Tambahan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="10" cols="100" name="deskripsi"></textarea>
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