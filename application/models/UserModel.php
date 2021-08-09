<?php
class UserModel extends CI_Model{
    public function insertUser($user){
		return $this->db->insert('user',$user);
    }

	function getUser($username = null, $password = null){
		if(!empty($username) && !empty($password)){
			$this->db->where("username",$username);
			$this->db->where("password",$password);
			return $this->db->get("user");
		}
		return $this->db->get("user");
	}

	function isNIKExist($nik){
		$this->db->where("NIK",$nik);
		if($this->db->get("user")->num_rows()>0){
			return true;
		}
		return false;
	}

	function isEmailExist($username){
		$this->db->where("username",$username);
		if($this->db->get("user")->num_rows()>0){
			return true;
		}
		return false;
	}

	function deleteUser($NIK){
		$this->db->where('NIK',$NIK);
		return $this->db->delete('user');
	}

	function updateAkses($NIK){
		$data = array('Akses' => 1 );
		$this->db->where('NIK', $NIK);
		$this->db->update('user', $data);
	}

	function getPathFoto($NIK){
		$this->db->select('Nama');
		$this->db->select('Foto');
		$this->db->where("NIK",$NIK);
		return $this->db->get("user");
	}

	function getEmail($NIK){
		$this->db->select('username');
		$this->db->where("NIK",$NIK);
		return $this->db->get("user");
	}

	function getUserNoAkses(){
		$arr = array(
			'Akses' => 0,
			'Admin' => 0
		);
		$this->db->where($arr);
		return $this->db->get('user');
	}

	function updateVote($nik, $vote){
		$this->db->where('NIK',$nik);
		$this->db->update('user',array('Vote' => $vote));
	}
}
?>