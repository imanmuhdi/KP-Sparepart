<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.Mesin : Daftar Mesin</title>
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
				<ul class="navbar-nav mr-auto">
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
      		<a class="btn btn-primary" href="<?php echo site_url('Admin/tambahMesin');?>">Tambah Mesin</a>
   	</div>
	<div class="content-wrapper">
   		<div class="container">
      		<h3>DAFTAR MESIN</h3>
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1 >' 
				);
				$this->table->set_template($template); 
				$this->table->set_heading("ID Mesin","Jam Operasi","Target Down","Tipe Mesin", "Merk Mesin", "No Mesin","Tahun","Aksi"); 
				foreach($tb_mesin->result() as $r){
					$id = urldecode($r->id_mesin);
					$edit = '<a href="'.site_url("mesin/update/".$id).'" class="btn btn-primary">Edit</a>';
					$hapus = '<a href="'.site_url("mesin/hapus/".$id).'" class="btn btn-danger" onclick="return confirm('."'"."Hapus Mesin dengan Id : ".$id."'".');">Hapus</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$edit.$hapus."</div>";
					$this->table->add_row($r->id_mesin,$r->jam_op,$r->target_down,$r->type_m,$r->merk_m,$r->no_m,$r->tahun,$aksi);
				}
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
