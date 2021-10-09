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
			<div><h1>Data Nota Tanpa Sparepart</h1></div>
		</div>
		<div class="content-wrapper">
   		<div class="container" style="padding-bottom: 50px">
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1>'
				);
				$this->table->set_template($template);
				$this->table->set_heading("Nomor","ID Mesin","Instansi","Deskripsi");
				foreach($tb_perbaikan2->result() as $r){
					$this->table->add_row($r->no,$r->id_mesin,$r->instansi,$r->deskripsi);
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