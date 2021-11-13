<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.Mesin : Daftar Sparepart</title>
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
		.content-wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 10px;
		}
		.logout{
			color: grey;
		}
		.logout:hover{
			text-decoration: none;
			color: rgb(200,200,200);
		}
		img{
			max-width: 200px;
			width: 100%;
		}
		nav{
			background-color: #1F2351;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<img src="<?php echo site_url('../assets/image/logo.png')?>" >
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url("Admin"); ?>">Halaman Utama</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto ">
				<li>
					<?php
					$admin = '<a class="nav-link" href="'.site_url("Admin/pindahSparepart/").'">Sparepart</a>';
					echo $admin;
					?>
				</li>
				<li class="nav-item">
				<?php
					$admin = '<a class="nav-link" href="'.site_url("Admin/pindahMesin/").'">Mesin</a>';
					echo $admin;
					?>
				</li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('Admin/logout');?>" class="logout">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="padding-top:20px; padding-left: 999px">
      		<a class="btn btn-primary btn1" href="<?php echo site_url('Admin/tambahSparepart');?>">Tambah Sparepart</a>
   	</div>
	<div class="content-wrapper">
   		<div class="container">
      		<h3>DAFTAR SPAREPART</h3>
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1 >'
				);
				$count = 0;
				$this->table->set_heading("Kode Part","Nama Part","Tipe","Stock Minimal","Saldo Awal","Masuk", "Keluar", "Saldo Akhir","Keterangan","Foto","Aksi"); 
				foreach($tb_sparepart->result() as $r){
					if($r->keterangan != "OK"){
						$count = $count + 1;
					}
					$kode = urldecode($r->kd_part);
					$edit = '<a href="'.site_url("sparepart/update/".$kode).'" class="btn btn-primary" >Edit</a>';
					$hapus = '<a href="'.site_url("sparepart/hapus/".$kode).'" class="btn btn-danger" onclick="return confirm('."'"."Hapus Sparepart dengan kode : ".$kode."'".');">Hapus</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$edit.$hapus."</div>";
					$foto = '<img src="'.$r->foto.'">';
					$this->table->add_row($r->kd_part,$r->nama_part,$r->type,$r->stock_minimal,$r->saldo_awal,$r->masuk,$r->keluar,$r->saldo_akhir,$r->keterangan,$foto,$aksi);
				}
				if($count != 0){
					echo "Terdapat ".$count." Sparepart yang perlu dipesan ulang";	
				}
				$this->table->set_template($template); 
				echo $this->table->generate();
			?>
   		</div>
	</div>
</body>
<br>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable(); 
	});
</script>
</html>
