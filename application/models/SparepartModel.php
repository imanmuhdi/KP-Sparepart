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
}
?>
