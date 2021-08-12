<?php
class Perbaikan extends CI_Controller {
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("User/perbaikan",$data);
    }

    public function perbaikanMesin1(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("user/perbaikanMesin1",$data);
    }

    public function perbaikanMesin2(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("user/perbaikanMesin2",$data);
    }

    public function prosesTambah() {
        $this->load->model("PerbaikanModel","",TRUE);
        $perbaikan = array(
            "id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin")->row()->id_mesin,
            "kd_part" => $this->PerbaikanModel->getPerbaikan1("kd_part")->row()->kd_part,
            "deskripsi" => $this->input->post("deskripsi")
        );
        if($this->PerbaikanModel->insertPerbaikan($perbaikan)) {
            redirect(site_url("user/perbaikan"));
        } else {
            redirect(site_url('user/perbaikan'));
        }
    }
}
?>
