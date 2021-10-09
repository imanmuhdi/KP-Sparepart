<?php
class NotaModel extends CI_Model {
	function getNota1() {
		return $this->db->get("tb_perbaikan1");
	}
	function getNota2() {
		return $this->db->get("tb_perbaikan2");
	}
	function insertNota1($nota) {
		var_dump($nota);
		return $this->db->insert('tb_perbaikan1',$nota);
	}
	function insertNota2($nota) {
		var_dump($nota);
		return $this->db->insert('tb_perbaikan2',$nota);
	}
	function getNota1ByNo($no) {
		$this->db->where("no",$no);
		return $this->db->get('tb_perbaikan1');
	}
	function getNota2ByNo($no) {
		$this->db->where("no",$no);
		return $this->db->get('tb_perbaikan2');
	}
	function deleteNota1($no) {
		$this->db->where("no",$no);
		return $this->db->delete("tb_perbaikan1");
	}
	function deleteNota2($no) {
		$this->db->where("no",$no);
		return $this->db->delete("tb_perbaikan2");
	}
}