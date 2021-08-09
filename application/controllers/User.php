<?php
class User extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect('Home');
        }
		$data['nama'] = $this->session->userdata('Nama');
        $data['nik'] = $this->session->userdata('NIK');
        $data['email'] = $this->session->userdata('Email');
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;
        $this->load->view('User/user',$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }
}
?>
