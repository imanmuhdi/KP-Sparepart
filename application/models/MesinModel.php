<?php
class MesinModel extends CI_Model {
	function getMesin() {
		return $this->db->get("tb_mesin");
	}
	function insertMesin($mesin) {
		return $this->db->insert('tb_mesin',$mesin);
	}
	function getMesinById($id) {
		$this->db->where("id_mesin",$id);
		return $this->db->get('tb_mesin');
	}

	function updateMesin($tb_mesin) {
		$update = array(
			"id_mesin" => $tb_mesin['id_mesin'],
			"jam_op" => $tb_mesin['jam_op'],
			"target_down" => $tb_mesin["target_down"],
			"type_m" => $tb_mesin["type_m"],
			"merk_m" => $tb_mesin["merk_m"],
			"no_m" => $tb_mesin["no_m"],
			"tahun" => $tb_mesin["tahun"]
		);
		$this->db->where("id_mesin",$tb_mesin['id_mesin']);
		return $this->db->update("tb_mesin",$update);
	}
	function deleteMesin($id) {
		$this->db->where("id_mesin",$id);
		return $this->db->delete("tb_mesin");
	}
}
?>
