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
	function updateNota1($tb_perbaikan1) {
		$update = array(
			"id_mesin" => $tb_perbaikan1["id_mesin"],
			"kd_part" => $tb_perbaikan1["kd_part"],
			"merk_m" => $tb_perbaikan1['merk_m'],
			"type" => $tb_perbaikan1['type'],
			"jml_part" => $tb_perbaikan1["jml_part"],
			"deskripsi" => $tb_perbaikan1["deskripsi"],
			"deskripsi2" => $tb_perbaikan1["deskripsi2"],
			"perbaikan" => $tb_perbaikan1["perbaikan"],
            "hasil" => $tb_perbaikan1["hasil"],
            "lokasi" => $tb_perbaikan1["lokasi"],
            "oleh" => $tb_perbaikan1["oleh"],
            "tgl" => $tb_perbaikan1["tgl"],
            "mulai" => $tb_perbaikan1["mulai"],
            "selesai" => $tb_perbaikan1["selesai"],
            "d_time" => $tb_perbaikan1["d_time"],
            "penyetuju" => $tb_perbaikan1["penyetuju"],
            "pelaksana" => $tb_perbaikan1["pelaksana"]
		);
		$this->db->where("no",$tb_perbaikan1['no']);
		return $this->db->update("tb_perbaikan1",$update);
	}
	function updateNota2($tb_perbaikan2) {
		$update = array(
			"id_mesin" => $tb_perbaikan2["id_mesin"],
			"merk_m" => $tb_perbaikan2['merk_m'],
			"instansi" => $tb_perbaikan2["instansi"],
			"d_kerusakan" => $tb_perbaikan2["d_kerusakan"],
			"d_penyebab" => $tb_perbaikan2["d_penyebab"],
			"d_perbaikan" => $tb_perbaikan2["d_perbaikan"],
			"pengaju" => $tb_perbaikan2["pengaju"],
            "tanggal" => $tb_perbaikan2["tanggal"],
            "penyetuju" => $tb_perbaikan2["penyetuju"]
		);
		$this->db->where("no",$tb_perbaikan2['no']);
		return $this->db->update("tb_perbaikan2",$update);
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