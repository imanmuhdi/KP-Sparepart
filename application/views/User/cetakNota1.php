<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nota Dengan Sparepart</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <style>
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
	</style>
</head>
<body>
	<main>
		<div class="display-flex">
			<div><h1>Data Nota Dengan Sparepart</h1></div>
		</div>
		<div class="content-wrapper">
   		<div class="container" style="padding-bottom: 50px">
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1>'
				);
				$this->table->set_template($template); 
				$this->table->set_heading("Nomor","ID Mesin","Kode Sparepart","Jumlah Sparepart","Deskripsi","Aksi");
				foreach($tb_perbaikan1->result() as $r){
					$no = urldecode($r->no);
					$edit = '<a href="'.site_url("Nota/cetakNota1/update/".$no).'" class="btn btn-primary">Edit</a>';
					$hapus = '<a href="'.site_url("Nota/hapus/".$no).'" class="btn btn-danger" onclick="return confirm('."'"."Hapus Nota dengan Nomor : ".$no."'".');">Hapus</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$edit.$hapus."</div>";
					$this->table->add_row($r->no,$r->id_mesin,$r->kd_part,$r->jml_part,$r->deskripsi,$aksi);
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