<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo Admin!</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <style>
        .logout{
			color: grey;
		}

		.logout:hover{
			text-decoration: none;
			color: rgb(200,200,200);
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

    <div class="top-wrapper">
        <div class="container">
            <h1 class="d-flex justify-content-center align-items-center mt-5">
                Hallo <?php echo $nama; ?>
            </h1>
        </div>
    </div>
</body>
</html>