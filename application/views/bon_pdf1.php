<html>
<head>
</head>
<body>
	<table width="100%" height=100%  border="1">
		<tr>
			<td width=50% rowspan="5">
			<center><b>PERMINTAAN PERBAIKAN MESIN</b></center>
			</td>
			<td width=22.5%>
			Kode Mesin
			</td>
			<td width=5%>
				<center>:</center>
			</td>
			<td width=22.5%>
				<?php echo $tb_perbaikan1->id_mesin?>
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><center>:</center></td>
			<td><?php echo $tb_perbaikan1->tgl?></td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td><center>:</center></td>
			<td><?php echo $tb_perbaikan1->lokasi?></td>
		</tr>
		<tr>
			<td>Diajukan Oleh</td>
			<td><center>:</center></td>
			<td><?php echo $tb_perbaikan1->oleh?></td>
		</tr>
		<tr>
			<td>Merk Mesin</td>
			<td><center>:</center></td>
			<td><?php echo $tb_perbaikan1->merk_m?></td>
		</tr>

		<tr>
			<td colspan="4">
				Kerusakan Masalah : <?php echo $tb_perbaikan1->deskripsi?>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				Penyebab Kerusakan : <?php echo $tb_perbaikan1->deskripsi2?>
			</td>
		</tr>
		<tr>
			<td colspan="1">
				Perbaikan : <?php echo $tb_perbaikan1->perbaikan?>
			</td>
			<td bgcolor=#FFFD56>
				<center><b>Down Time (Jam):</b></center>
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="1">
				Kode Part : <?php echo $tb_perbaikan1->kd_part?>
			</td>
			<td rowspan="2" bgcolor=#FFFD56>
				<center><h1><?php echo $tb_perbaikan1->d_time?></h1></center>
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="1">
				<b>Type :</b> <?php echo $tb_perbaikan1->type?>
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="4">
				Perbaikan Mesin : <?php echo $tb_perbaikan1->perbaikan?>
			</td>
		</tr>
		<tr>
			<td>
				Mulai Perbaikan Pukul : <?php echo $tb_perbaikan1->mulai?>
			</td>
			<td colspan="3">
				Selesai Perbaikan : <?php echo $tb_perbaikan1->selesai?>
			</td>
		</tr>
		<tr>
			<td ><center>
				Disetujui<br>
				<br>
				<br>
				<br>
				<br>
				<?php echo $tb_perbaikan1->penyetuju?><br>
				(.................)
			</center></td>
			<td colspan="3"><center>				
				Dilaksanakan Oleh :<br>
				<br>
				<br>
				<br>
				<br>
				<?php echo $tb_perbaikan1->pelaksana?><br>
				(.................)</center></td>
		</tr>
		<tr>
			<td colspan="4">
				No Bon : <?php echo $tb_perbaikan1->no?>
			</td>
		</tr>
	</table>
</body>
</html>