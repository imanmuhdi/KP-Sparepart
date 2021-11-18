<?php
class SparepartModel extends CI_Model {
	function getSparepart() {
		return $this->db->get("tb_sparepart");
	}

	function insertSparepart($sparepart) {
		return $this->db->insert('tb_sparepart',$sparepart);
	}

	function getSparepartByKd($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->get('tb_sparepart');
	}
	function updateSparepart($tb_sparepart) {
		$update = array(
			"nama_part" => $tb_sparepart["nama_part"],
			"type" => $tb_sparepart["type"],
			"saldo_awal" => $tb_sparepart["saldo_awal"],
			"masuk" => $tb_sparepart["masuk"],
			"keluar" => $tb_sparepart["keluar"],
			"saldo_akhir" => $tb_sparepart["saldo_akhir"],
			"stock_minimal" => $tb_sparepart["stock_minimal"],
			"keterangan" => $tb_sparepart["keterangan"],
			"foto" => $tb_sparepart["foto"]
		);
		$this->db->where("kd_part",$tb_sparepart['kd_part']);
		return $this->db->update("tb_sparepart",$update);
	}
	function deleteSparepart($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->delete("tb_sparepart");
	}

	function getFoto($kd){
		$this->db->select('foto');
  		$this->db->where("kd_part", $kd);
  		$this->db->limit(1);
  		$query = $this->db->get('tb_sparepart');
  		return $query->row()->foto;
	}

	function ketcek($kd,$jml){
		$this->db->where("kd_part",$kd);
		$query = $this->db->get('tb_sparepart');
		$query->row()->saldo_akhir= $query->row()->saldo_akhir - $jml;
		if($query->row()->saldo_akhir >= $query->row()->stock_minimal){
			$query->row()->keterangan = "OK";
			$this->db->where("kd_part",$kd);
			$query->row()->saldo_akhir= $query->row()->saldo_akhir + $jml;
			$this->db->update("tb_sparepart",$query->row());
		}
		if(($query->row()->saldo_akhir < $query->row()->stock_minimal)){
			$query->row()->keterangan = "PESAN ULANG";
			$this->db->where("kd_part",$kd);
			$query->row()->saldo_akhir= $query->row()->saldo_akhir + $jml;
			$this->db->update("tb_sparepart",$query->row());
		}
	}

	function ceksaldo($kd,$jml){
		$this->db->where("kd_part",$kd);
		$query = $this->db->get('tb_sparepart');
		$query->row()->saldo_akhir= $query->row()->saldo_akhir -$jml;
		if($query->row()->saldo_akhir < 0){
			return false;
		}
		if($query->row()->saldo_akhir >= 0){
			return true;
		}
	}



	function editsaldo($kd,$jml,$jmlawal){
		$this->db->where("kd_part",$kd);
		$query = $this->db->get('tb_sparepart');
		if($jmlawal > $jml){#ini
			$query->row()->saldo_akhir = $query->row()->saldo_akhir+($jmlawal-$jml);
			$query->row()->keluar = $query->row()->keluar -($jmlawal-$jml);
		}
		if($jmlawal < $jml){
			$query->row()->saldo_akhir = $query->row()->saldo_akhir-($jml-$jmlawal);
			$query->row()->keluar = $query->row()->keluar +($jml-$jmlawal);

		}
		if($query->row()->saldo_akhir < $query->row()->stock_minimal){
			$query->row()->keterangan = "PESAN ULANG";
		}
		if($query->row()->saldo_akhir >= $query->row()->stock_minimal){
			$query->row()->keterangan = "OK";
		}
		

		if($query->row()->saldo_akhir < 0){
			return false;
		}
		if($query->row()->saldo_akhir >= 0){
			$this->db->where("kd_part",$kd);
			$this->db->update("tb_sparepart",$query->row());
			return true;
		}
		
	}
}
?>
