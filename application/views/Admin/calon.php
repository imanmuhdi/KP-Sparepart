<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calon Presiden</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <style>
		.content-wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 40px;
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
		td{
			text-align: center;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url("Admin"); ?>">Halaman Admin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">

				<ul class="navbar-nav mr-auto">
				<li>
					<?php
					$calon1 = '<a class="nav-link" href="'.site_url("Admin/pindahKonfirm/").'">Konfirmasi</a>';
					echo $calon1;
					?>
				</li>
				<li class="nav-item">
				<?php
					$calon1 = '<a class="nav-link" href="'.site_url("Admin/pindahCalon/").'">Calon</a>';
					echo $calon1;
					?>
				</li>
				<li>
					<a href="<?php echo site_url('User')?>" class="nav-link">Coblos</a>
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
	<div class="container" style="padding-top:40px; padding-left: 999px">
      		<a class="btn btn-primary" href="<?php echo site_url('Admin/tambahCalon');?>">Tambah Calon</a>
   	</div>
	<div class="content-wrapper">
   		<div class="container">
      		<h3>Daftar Calon Presiden</h3>
      		<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1>' 
				);
				$this->table->set_template($template); 
				$this->table->set_heading("Nama Calon","Foto","Visi","Misi","Aksi"); 
				foreach($calon->result() as $r){
					$edit = '<a href="'.site_url("calon/update/".$r->id_calon).'" class="btn btn-primary">Edit</a>';
					$hapus = '<a href="'.site_url("calon/hapus/".$r->id_calon).'" class="btn btn-danger">Hapus</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$edit.$hapus."</div>";
					$foto = '<img src="'.$r->foto.'">';
					$this->table->add_row($r->nama_calon,$foto,$r->visi,$r->misi,$aksi);
				}
				echo $this->table->generate();
			?>
   		</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable(); 
	});
</script>
</html>
