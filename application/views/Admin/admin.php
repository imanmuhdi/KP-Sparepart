<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home : P.Mesin</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <style>
    	body{
			background: #8CD0F4;
			color: black;
		}
		.font{
			align-self: center;
			padding-top: 25px;
			font-weight: bold;
			font-family: cursive;
			font-size: 35px;
		}
        .logout{
			color: grey;
		}

		.logout:hover{
			text-decoration: none;
			color: rgb(200,200,200);
		}
		.img{
			padding-top: 80px;
			width="400";
			height="120";
		}
		nav{
			background-color: #1F2351;
		}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    	<img src="<?php echo site_url('../assets/image/logo.png')?>" width=200>
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
    <div class="top-wrapper">
        <div class="container">
            <br>
			<h1 align="center" style="padding-top: 40px; font-family: cursive;">PENGELOLAAN DATA PERBAIKAN <br>DAN PENYEDIAN SPAREPART MESIN KAIN TEKSTIL</h1>
			<h1 align="center" style="padding-top: 40px; font-family: cursive;">ANDA LOGIN SEBAGAI PETUGAS SPAREPART</h1>
			<h1 align="center" style="padding-top: 40px; font-family: cursive;">SELAMAT DATANG!</h1>
			<?php
			echo "<center><h2 class=font>".$nama."";
			?>
			<center><img src="<?php echo site_url('../assets/image/logo.png')?>" class="img"></center>
        </div>
    </div>
</body>
</html>