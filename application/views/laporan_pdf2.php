<html><head>
<style type="text/css">
</style>
</head><body>
<main>
			<?php 
				$count = 0;
				$template = array( 
				'table_open' => '<table id="myTable" border=1 width=100% >'
				);
				$this->table->set_template($template); 
				$this->table->set_heading("No","Id Mesin","Instansi","Tanggal","Pengaju","Merk Mesin","Masalah","Penyebab","Perbaikan","Penyetuju");
				foreach($tb_perbaikan2 as $r){
				$this->table->add_row($r->no,$r->id_mesin,$r->instansi,$r->tanggal,$r->pengaju,$r->merk_m,$r->d_kerusakan,$r->d_penyebab,$r->d_perbaikan,$r->penyetuju);
				}
				echo $this->table->generate();

			?>
<?php /*
Template Tabel Bon
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
				(DATA)
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><center>:</center></td>
			<td>(DATA)</td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td><center>:</center></td>
			<td>(DATA)</td>
		</tr>
		<tr>
			<td>Diajukan Oleh</td>
			<td><center>:</center></td>
			<td>(DATA)</td>
		</tr>
		<tr>
			<td>Merk Mesin</td>
			<td><center>:</center></td>
			<td>(DATA)</td>
		</tr>

		<tr>
			<td colspan="4">
				Kerusakan Masalah : (DATA)
			</td>
		</tr>
		<tr>
			<td colspan="4">
				Penyebab Kerusakan : (DATA)
			</td>
		</tr>
		<tr>
			<td colspan="1">
				Perbaikan : (DATA)
			</td>
			<td bgcolor=#FFFD56>
				<center><b>Down Time (Jam):</b></center>
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="1">
				Kode Part : (DATA)
			</td>
			<td rowspan="2" bgcolor=#FFFD56>
				<center><h3>(DATA)</h3></center>
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="1">
				<b>Type :</b> (DATA)
			</td>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td colspan="4">
				Perbaikan Mesin : (DATA)
			</td>
		</tr>
		<tr>
			<td>
				Mulai Perbaikan Pukul : (DATA)
			</td>
			<td colspan="3">
				Selesai Perbaikan : (DATA)
			</td>
		<tr>
			<td ><center>
				Disetujui<br>
				<br>
				<br>
				<br>
				<br>
				(DATA)<br>
				(.................)
			</center></td>
			<td colspan="3"><center>				
				Dilaksanakan Oleh :<br>
				<br>
				<br>
				<br>
				<br>
				(DATA)<br>
				(.................)</center></td>
		</tr>
		<tr>
			<td colspan="4">
				No Bon :
			</td>
		</tr>
	</table>
</body>
</html>
*/?>
</main>
</body></html>