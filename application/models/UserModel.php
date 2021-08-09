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
}
?>