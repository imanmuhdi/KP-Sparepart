<?php
class Perbaikan extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan();
        $data['perbaikan'] = $this->session->userdata('perbaikan');
        $this->load->view("User/perbaikan",$data);
    }
}
?>
