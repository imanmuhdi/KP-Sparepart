<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<style>
		.logout{
			color: grey;
		}

		.logout:hover{
			text-decoration: none;
			color: rgb(200,200,200);
		}
		
		.content-wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 50px;
		}
		
		th{
			text-align: center;
		}

		.dataTables_filter{
			padding-bottom: 20px;
		}

		.dataTables_paginate, .dataTables_info{
			margin-top: 20px;
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
					$calon = '<a class="nav-link" href="'.site_url("Admin/pindahKonfirm/").'">Konfirmasi</a>';
					echo $calon;
					?>
				</li>
				<li class="nav-item">
				<?php
					$calon = '<a class="nav-link" href="'.site_url("Admin/pindahCalon/").'">Calon</a>';
					echo $calon;
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

	<div class="content-wrapper">
		<div class="container">
			<?php
				$template = array( 
					'table_open' => '<table id="myTable" border=1>' 
				);
				$this->table->set_template($template); 
				$this->table->set_heading("NIK","Nama","Email","Akses"); 
				foreach($user->result() as $r){
					$terima = '<a href="'.site_url("Admin/terima/".$r->NIK).'" class="btn btn-primary">Terima</a>';
					$hapus = '<a href="'.site_url("Admin/hapus/".$r->NIK).'" class="btn btn-danger">Tolak</a>';
					$aksi = "<div class='d-flex justify-content-between align-items-start'>".$terima.$hapus."</div>";
					$this->table->add_row($r->NIK,$r->Nama,$r->Email, $aksi); 
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
