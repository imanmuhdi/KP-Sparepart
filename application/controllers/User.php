<?php
class User extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect('Home');
        }
		$data['nama'] = $this->session->userdata('nama');
        $data['username'] = $this->session->userdata('username');
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

    public function pindahPerbaikan1(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model('PerbaikanModel',"",TRUE);
        $data['tb_sperbaikan1'] = $this->PerbaikanModel->getPerbaikan1();
        $this->load->view("user/perbaikan",$data);
    }

    public function invalidinput(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->view("user/invalidinput");
    }
}
?>
