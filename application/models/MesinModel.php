<?php
class MesinModel extends CI_Model {
	function getMesin() {
		return $this->db->get("tb_mesin");
	}
	function insertMesin($tb_mesin) {
		return $this->db->insert('Mesin',$tb_mesin);
	}
	function getMesinById($id) {
		$this->db->where("id_mesin",$id);
		return $this->db->get('Mesin');
	}
	function updateMesin($tb_mesin) {
		$update = array(
			"nama_part" => $tb_sparepart['nama_part'],
			"type" => $tb_sparepart['foto'],
			"saldo_awal" => $tb_sparepart['visi'],
			"masuk" => $tb_sparepart["masuk"],
			"keluar" => $tb_sparepart["keluar"],
			"saldo_akhir" => $tb_sparepart["saldo_akhir"],
			"stock_minimal" => $tb_sparepart["stock_minimal"],
			"keterangan" => $tb_sparepart["keterangan"]
		);
		$this->db->where("id_mesin",$tb_mesin['id_mesin']);
		return $this->db->update("Mesin",$update);
	}
	function deleteMesin($id) {
		$this->db->where("id_mesin",$id);
		return $this->db->delete("Mesin");
	}
}
?>
