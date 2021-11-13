<?php
class PerbaikanModel extends CI_Model {
	function getPerbaikanSparepart(){
		return $this->db->get('tb_perbaikan1');
	}
	function getPerbaikanTanpaSparepart(){
		return $this->db->get('tb_perbaikan2');
	}
	function getPerbaikan1() {
		return $this->db->get("tb_sparepart");
	}
	function getPerbaikan2() {
		return $this->db->get("tb_mesin");
	}
	function insertPerbaikan($perbaikan) {
		var_dump($perbaikan);
		return $this->db->insert('tb_perbaikan1',$perbaikan);
	}
	function insertPerbaikan2($perbaikan) {
		var_dump($perbaikan);
		return $this->db->insert('tb_perbaikan2',$perbaikan);
	}
}
?>
