<html><head>
</head><body>
<main>
			<?php 
				$template = array( 
				'table_open' => '<table id="myTable" border=1 width="100%">'
				);
				$this->table->set_template($template); 
				$this->table->set_heading("No","Id Mesin","Merk Mesin","Kode part","Type part","Jumlah Part", "Masalah","Penyebab","Hasil Perbaikan","Lokasi","Diajukan","Tanggal","Mulai","Selesai","Down Time","Disetujui","Dilaksakan");
				foreach($tb_perbaikan1 as $r){
				$this->table->add_row($r->no,$r->id_mesin,$r->merk_m,$r->kd_part,$r->type,$r->jml_part,$r->deskripsi,$r->deskripsi2,$r->hasil,$r->lokasi,$r->oleh,$r->tgl,$r->mulai,$r->selesai,$r->d_time,$r->penyetuju,$r->pelaksana);
				}
				echo $this->table->generate();		
			?>
</main>
</body></html>