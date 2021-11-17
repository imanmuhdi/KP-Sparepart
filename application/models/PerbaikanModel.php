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
	function deleteKDsparepart1($kode){
        $this->db->where("kd_part",$kode);
        $this->db->delete('tb_perbaikan1');
    }
    function deleteIDmesin1($id){
        $this->db->where("id_mesin",$id);
        $this->db->delete('tb_perbaikan1');
    }
    function deleteIDmesin2($id){
        $this->db->where("id_mesin",$id);
        $this->db->delete('tb_perbaikan2');
    }
}
?>
