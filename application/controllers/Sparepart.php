<?php
class Sparepart extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("SparepartModel","",TRUE);

        $data['tb_sparepart'] = $this->SparepartModel->getSparepart();
        $data['sparepart'] = $this->session->userdata('Vote');
        $this->load->view("User/sparepart",$data);
    }
}
?>
