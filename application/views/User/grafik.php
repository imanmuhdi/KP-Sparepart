<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User : Data Sparepart</title>
	<link rel="stylesheet" href="<?php echo site_url('../assets/css/style/user.css')?>">

	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
		.btn {
			box-sizing: border-box;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			background-color: transparent;
			border: 2px solid black;
			border-radius: 0.6em;
			color: black;
			cursor: pointer;
			display: flex;
			align-self: center;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1;
			margin: 20px;
			padding: 1.2em 2.8em;
			text-decoration: none;
			text-align: center;
			text-transform: uppercase;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
		}
		.btn1 {
			border: 1px solid black;
			color: black;
			cursor: pointer;
			display: flex;
			text-decoration: none;
			text-align: center;
			text-transform: uppercase;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
		}
		.btn2 {
			border: 1px solid black;
			color: black;
			cursor: pointer;
			display: flex;
			text-decoration: none;
			text-align: center;
			text-transform: uppercase;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
		}
		.oke {
		  	box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
		  	transition: all 150ms ease-in-out;
		}
		.oke:hover {
		  	box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="<?php echo site_url("User")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
					<span class="link-text">Halaman Utama</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Sparepart")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M17.222,5.041l-4.443-4.414c-0.152-0.151-0.356-0.235-0.571-0.235h-8.86c-0.444,0-0.807,0.361-0.807,0.808v17.602c0,0.448,0.363,0.808,0.807,0.808h13.303c0.448,0,0.808-0.36,0.808-0.808V5.615C17.459,5.399,17.373,5.192,17.222,5.041zM15.843,17.993H4.157V2.007h7.72l3.966,3.942V17.993z"></path><path d="M5.112,7.3c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808c0-0.447-0.363-0.808-0.808-0.808H5.92C5.475,6.492,5.112,6.853,5.112,7.3z"></path><path d="M5.92,5.331h4.342c0.445,0,0.808-0.361,0.808-0.808c0-0.446-0.363-0.808-0.808-0.808H5.92c-0.444,0-0.808,0.361-0.808,0.808C5.112,4.97,5.475,5.331,5.92,5.331z"></path><path d="M13.997,9.218H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,9.58,14.442,9.218,13.997,9.218z"></path><path d="M13.997,11.944H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,12.306,14.442,11.944,13.997,11.944z"></path><path d="M13.997,14.67H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.447,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,15.032,14.442,14.67,13.997,14.67z"></path></svg>
					<span class="link-text">Data Sparepart</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Mesin")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M8.627,7.885C8.499,8.388,7.873,8.101,8.13,8.177L4.12,7.143c-0.218-0.057-0.351-0.28-0.293-0.498c0.057-0.218,0.279-0.351,0.497-0.294l4.011,1.037C8.552,7.444,8.685,7.667,8.627,7.885 M8.334,10.123L4.323,9.086C4.105,9.031,3.883,9.162,3.826,9.38C3.769,9.598,3.901,9.82,4.12,9.877l4.01,1.037c-0.262-0.062,0.373,0.192,0.497-0.294C8.685,10.401,8.552,10.18,8.334,10.123 M7.131,12.507L4.323,11.78c-0.218-0.057-0.44,0.076-0.497,0.295c-0.057,0.218,0.075,0.439,0.293,0.495l2.809,0.726c-0.265-0.062,0.37,0.193,0.495-0.293C7.48,12.784,7.35,12.562,7.131,12.507M18.159,3.677v10.701c0,0.186-0.126,0.348-0.306,0.393l-7.755,1.948c-0.07,0.016-0.134,0.016-0.204,0l-7.748-1.948c-0.179-0.045-0.306-0.207-0.306-0.393V3.677c0-0.267,0.249-0.461,0.509-0.396l7.646,1.921l7.654-1.921C17.91,3.216,18.159,3.41,18.159,3.677 M9.589,5.939L2.656,4.203v9.857l6.933,1.737V5.939z M17.344,4.203l-6.939,1.736v9.859l6.939-1.737V4.203z M16.168,6.645c-0.058-0.218-0.279-0.351-0.498-0.294l-4.011,1.037c-0.218,0.057-0.351,0.28-0.293,0.498c0.128,0.503,0.755,0.216,0.498,0.292l4.009-1.034C16.092,7.085,16.225,6.863,16.168,6.645 M16.168,9.38c-0.058-0.218-0.279-0.349-0.498-0.294l-4.011,1.036c-0.218,0.057-0.351,0.279-0.293,0.498c0.124,0.486,0.759,0.232,0.498,0.294l4.009-1.037C16.092,9.82,16.225,9.598,16.168,9.38 M14.963,12.385c-0.055-0.219-0.276-0.35-0.495-0.294l-2.809,0.726c-0.218,0.056-0.351,0.279-0.293,0.496c0.127,0.506,0.755,0.218,0.498,0.293l2.807-0.723C14.89,12.825,15.021,12.603,14.963,12.385"/></svg>
					<span class="link-text">Data Mesin</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Perbaikan")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M19.175,4.856L15.138,0.82c-0.295-0.295-0.817-0.295-1.112,0L8.748,6.098c-0.307,0.307-0.307,0.805,0,1.112l1.462,1.462l-1.533,1.535L7.215,8.746c-0.307-0.307-0.805-0.307-1.112,0l-5.278,5.276c-0.307,0.307-0.307,0.805,0,1.112l4.037,4.037c0.154,0.153,0.355,0.23,0.556,0.23c0.201,0,0.403-0.077,0.556-0.23l5.28-5.276c0.148-0.148,0.23-0.347,0.23-0.556c0-0.209-0.083-0.409-0.23-0.556l-1.464-1.464l1.533-1.535l1.462,1.462c0.153,0.153,0.355,0.23,0.556,0.23c0.201,0,0.402-0.077,0.556-0.23l5.278-5.278c0.147-0.147,0.23-0.347,0.23-0.556C19.406,5.203,19.322,5.004,19.175,4.856zM9.585,13.339l-4.167,4.164l-2.925-2.925l4.166-4.164l0.906,0.905l-0.67,0.668c-0.307,0.307-0.307,0.805,0,1.112c0.154,0.153,0.356,0.23,0.556,0.23c0.203,0,0.403-0.077,0.556-0.23l0.67-0.668L9.585,13.339z M13.341,9.578l-0.906-0.906l0.663-0.662c0.307-0.307,0.307-0.805,0-1.112c-0.307-0.307-0.805-0.307-1.112,0L11.322,7.56l-0.906-0.906l4.166-4.166l2.925,2.925L13.341,9.578z"/></svg>
					<span class="link-text">Perbaikan Mesin</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Nota")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M7.126,14.692h5.748c0.39,0,0.706-0.316,0.706-0.706c0-0.39-0.315-0.706-0.706-0.706H7.126c-0.39,0-0.706,0.316-0.706,0.706C6.42,14.376,6.736,14.692,7.126,14.692z"></path><path d="M7.126,16.899h4.641c0.39,0,0.706-0.315,0.706-0.706c0-0.389-0.316-0.706-0.706-0.706H7.126c-0.39,0-0.706,0.317-0.706,0.706C6.42,16.584,6.736,16.899,7.126,16.899z"></path><path d="M18.933,3.163h-3.309V1.686c0-0.392-0.316-0.706-0.706-0.706H5.061c-0.39,0-0.706,0.314-0.706,0.706v1.477H1.067c-0.39,0-0.706,0.317-0.706,0.706v7.997c0,0.391,0.316,0.706,0.706,0.706h3.301v5.743c0,0.39,0.316,0.706,0.706,0.706h7.801c0.192,0,0.373-0.077,0.507-0.215l2.054-2.121c0.127-0.131,0.198-0.306,0.198-0.491v-3.622h3.3c0.39,0,0.706-0.315,0.706-0.706V3.869C19.638,3.481,19.323,3.163,18.933,3.163z M14.222,15.908l-1.647,1.701H5.779v-5.037h8.443V15.908z M18.227,11.16h-3.3H5.074H1.773V4.575h3.288c0.39,0,0.706-0.314,0.706-0.706V2.392h8.446v1.477c0,0.392,0.316,0.706,0.706,0.706h3.309V11.16z"></path></svg>
					<span class="link-text">Nota Perbaikan</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Grafik")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z"/></svg>
					<span class="link-text">Laporan Grafik</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url('User/logout');?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
					<span class="link-text">Logout</span>
				</a>
			</li>
		</ul>
	</nav>
	<main>
		<div class="display-flex">
			<div><h1>Laporan Down Time</h1></div>
		</div>
	</main>
</body>
</html>
