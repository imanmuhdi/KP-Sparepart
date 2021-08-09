<?php
class SparepartModel extends CI_Model {
	function getSparepart() {
		return $this->db->get("tb_sparepart");
	}
<<<<<<< HEAD
	function insertSparepart($tb_sparepart) {
		return $this->db->insert('Sparepart',$tb_sparepart);
	}
	function getSparepartByKd($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->get('Sparepart');
	}
	function updateSparepart($tb_sparepart) {
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
		return $this->db->update("Sparepart",$update);
	}
	function deleteCalon($kd) {
		$this->db->where("kd_part",$kd);
		return $this->db->delete("Sparepart");
	}
=======

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
>>>>>>> ffa8b7074570db1b01e67ef2b90c785440568629
}
?>
