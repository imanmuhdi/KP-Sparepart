<?php
class PerbaikanModel extends CI_Model {
	function getPerbaikan1() {
		return $this->db->get("tb_sparepart");
	}
	function getPerbaikan2() {
		return $this->db->get("tb_mesin");
	}
	function insertPerbaikan() {
		$perbaikan = array (
			"id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin"),
			"kd_part" => $this->PerbaikanModel->getPerbaikan1("kd_part"),
			"deskripsi" => $this->input->post("deskripsi")
		);
		return $this->db->insert('tb_perbaikan1',$perbaikan);
	}
	function getPerbaikanByKd($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->get('tb_perbaikan1');
	}
	function updatePerbaikan($tb_sparepart) {
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
		$this->db->where("kd_part",$tb_sparepart['kd_part']);
		return $this->db->update("Perbaikan",$update);
	}
	function deletePerbaikan($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->delete("Perbaikan");
	}
}
?>