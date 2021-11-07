<html>
<head>
	<title></title>
</head>
<body>
	<table width=100% height=100% border="1">
		<tr>
			<td rowspan="4" width=50% height=25%>
				<center><h3>PERMINTAAN PERBAIKAN MESIN</h3></center>
			</td>
			<td width=50%>
				Kode Mesin : <?php echo $tb_perbaikan2->id_mesin?>
			</td>
		</tr>
		<tr>
			<td>
				Tanggal : <?php echo $tb_perbaikan2->tanggal?>
			</td>
		</tr>
		<tr>
			<td>
				Diajukan Oleh : <?php echo $tb_perbaikan2->pengaju?>
			</td>
		</tr>
		<tr>
			<td>
				Merk Mesin : <?php echo $tb_perbaikan2->merk_m?>
			</td>
		</tr>
		<tr>
			<td colspan="2" height=10%>
				Instansi : <?php echo $tb_perbaikan2->instansi?>
			</td>
		</tr>
		<tr>
			<td colspan="2" height=10%>
				Kerusakan Masalah : <?php echo $tb_perbaikan2->d_kerusakan?>
			</td>
		</tr>
		<tr>
			<td colspan="2" height=10%>
				Penyebab Kerusakan : <?php echo $tb_perbaikan2->d_penyebab?>
			</td>
		</tr>
		<tr>
			<td colspan="2" height=10%>
				Perbaikan : <?php echo $tb_perbaikan2->d_perbaikan?>
			</td>
		</tr>
		<tr>
			<td colspan="2" rowspan="2" ><center>
				Disetujui :
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php echo $tb_perbaikan2->penyetuju?><br>
				(........)
			</td></center>
		</tr>
	</table>
</body>
</html>