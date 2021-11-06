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
            <form action="<?php echo site_url('perbaikan/prosestambah'); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            <label>ID Mesin</label>
                            <select name="id" required>
                                <option value='' disabled selected>Pilih Mesin</option>
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
                            <label>Kode Sparepart</label>
                            <select name="kd" required>
                                <option value='' disabled selected>Pilih Sparepart</option>
                                <?php
                                foreach ($tb_sparepart->result() as $tbs) {
                                    echo '<option value="'.$tbs->kd_part.'">'.$tbs->kd_part.'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Jumlah Sparepart</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="number" name="jml_part" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Kerusakan Masalah</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="3" cols="80" name="deskripsi" required></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="pad">Penyebab Kerusakan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="3" cols="80" name="deskripsi2" required></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Perbaikan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea rows="3" cols="80" name="perbaikan" required></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Hasil Perbaikan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="hasil" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Lokasi</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="lokasi" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Diajukan Oleh</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="oleh" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Tanggal</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="date" name="tgl" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Mulai Perbaikan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="time" name="mulai" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Selesai Perbaikan</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="time" name="selesai" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Disetujui Oleh</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="penyetuju" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Dilaksanakan Oleh</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="pelaksana" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-success">
                        </td>
                        <td>
                            <br>
                            <button type="button" onclick="window.history.go(-1)" class="btn btn-danger float-right">Kembali</button>
                        </td>
                    </tr>
                </table>
                <br>
            </form>
        </div>
    </div>
</body>
</html>