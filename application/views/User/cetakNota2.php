<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota Tanpa Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <style>
    	body{
            background: #8CD0F4;
            color: black;
        }
        tr{
            background: cyan;
        }
		.display-flex{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			height: 150px;
		}
		.content-wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 40px;
		}
		.font{
			padding-right: 360px;
            padding-top: 85px;
            font-family: cursive;
            font-size: 35px;
            font-weight: bold;
        }
        .font2{
        	padding-left: 80px;
			padding-top: 10px;
			padding-bottom: 25px;
			font-family: cursive;
			font-size: 35px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<main>
		<div class="display-flex">
			<div><h1 class="font"><img src="<?php echo site_url('../assets/image/logo.png')?>" style="padding-bottom: 10px; padding-right: 240px" width="430" height="60">PT SINAR CONTINENTAL</h1></div>
			<div><h1 class="font2">DATA NOTA TANPA SPAREPART</h1></div>
		</div>
		<div class="content-wrapper">
   		<div class="container" style="padding-bottom: 50px">
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1>'
				);
				$this->table->set_template($template);
				$this->table->set_heading("Nomor","ID Mesin","Merk Mesin","Instansi","Kerusakan Masalah","Penyebab Kerusakan","Perbaikan","Diajukan Oleh","Tanggal","Disetujui Oleh","Aksi");
				foreach($tb_perbaikan2->result() as $r){
					$no = urldecode($r->no);
					$export = '<a href="'.site_url("Nota/bonsparepart2/".$no).'" class="btn btn-success">Cetak</a>';
					$edit = '<a href="'.site_url("Nota/update2/".$no).'" class="btn btn-primary">Edit</a>';
					$hapus = '<a href="'.site_url("Nota/hapus2/".$no).'" class="btn btn-danger" onclick="return confirm('."'"."Hapus Nota dengan Nomor : ".$no."'".');">Hapus</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$export.$edit.$hapus."</div>";
					$this->table->add_row($r->no,$r->id_mesin,$r->merk_m,$r->instansi,$r->d_kerusakan,$r->d_penyebab,$r->d_perbaikan,$r->pengaju,$r->tanggal,$r->penyetuju,$aksi);
				}
				echo $this->table->generate();
			?>
			<br>
			<button type="button" onclick="window.location='http://[::1]/KP-Sparepart/index.php/Nota'" class="btn btn-danger float-right">Kembali</button>
   		</div>
	</div>
	</main>
</body>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable(); 
	});
</script>
</html>