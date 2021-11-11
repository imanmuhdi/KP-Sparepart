<!DOCTYPE HTML>
<html>
<head>  
</head>
<body>
			<?php
      			if($input != NULL){
				$template = array( 
					'table_open' => '<table id="myTable" border=1>'
				);
				$this->table->set_template($template); 
				$this->table->set_heading("ID Mesin","Jam Operasi","Down Time","Target Down","Persentase","Tipe Mesin", "Merk Mesin", "No Mesin","Tahun");
				$tampung = 0;
				foreach($tb_mesin->result() as $r ){
					foreach($tb_perbaikan1->result() as $a){
						if(preg_match('/^(\d{4})-(\d{1,2})-(\d{1,2})([^\d].*)?$/', $a->tgl, $parts)) {
                    		if (isset($parts[2])) {
                       			 $bulan = $parts[2];
                    		}
                    		if (isset($parts[1])) {
                       			 $tahun = $parts[1];
                    		}
                    		if($input == $bulan){
                    			if($input2 == $tahun){
                    				if($r->id_mesin == $a->id_mesin){
										$tampung = $tampung + $a->d_time;
            						}
                    			}	
                			}
						}
					}
					$pres = ($tampung/$r->target_down)*100; 
					$this->table->add_row($r->id_mesin,$r->jam_op,$tampung,$r->target_down,$pres,$r->type_m,$r->merk_m,$r->no_m,$r->tahun);
					$tampung = 0;
				}
				echo $this->table->generate();
				}
			?>
</body>
</html>