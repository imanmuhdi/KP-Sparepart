<?php
class SparepartModel extends CI_Model {
	function getSparepart() {
		return $this->db->get("tb_sparepart");
	}

	function insertSparepart($calon) {
		return $this->db->insert('Calon',$calon);
	}
	function getSparepartById($id) {
		$this->db->where("id_calon",$id);
		return $this->db->get('Calon');
	}
	function updateSparepart($calon) {
		$update = array(
			"nama_calon" => $calon['nama_calon'],
			"foto" => $calon['foto'],
			"visi" => $calon['visi'],
			"misi" => $calon["misi"]
		);
		$this->db->where("id_calon",$calon['id_calon']);
		return $this->db->update("Calon",$update);
	}
	function deleteSparepart($id) {
		$this->db->where("id_calon",$id);
		return $this->db->delete("Calon");
	}
	/*
	function updateSparepart($id){
	$this->db->select('suara');
   	$this->db->from('calon');
    	$this->db->where('id_calon', $id);
    	
    	$suara = $this->db->get()->row()->suara;
	$this->db->where('id_calon', $id);
	$data = array('suara' => $suara+1 );
	$this->db->update('calon', $data);
	}
	*/
}
?>
