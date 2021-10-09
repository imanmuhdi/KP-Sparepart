<html><head>
</head><body>
<main>
			<?php 
				$template = array( 
				'table_open' => '<table id="myTable" border=1>'
				);
				$this->table->set_template($template); 
				$this->table->set_heading("No","Id Mesin","Kode Part","Jumlah_Part", "Deskripsi");
				foreach($tb_perbaikan1 as $r){
				$this->table->add_row($r->no,$r->id_mesin,$r->kd_part,$r->jml_part,$r->deskripsi);
				}
				echo $this->table->generate();
				
			?>

</main>
</body></html>