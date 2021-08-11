<?php
class Admin extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $data['nama'] = $this->session->userdata('nama');
        $this->load->view("admin/admin",$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }

    public function pindahSparepart(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $this->load->model('SparepartModel',"",TRUE);
        $data['tb_sparepart'] = $this->SparepartModel->getSparepart();
        $this->load->view("admin/sparepart",$data);
    }
        
    public function pindahMesin(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $this->load->model('MesinModel',"",TRUE);
        $data['tb_mesin'] = $this->MesinModel->getMesin();
        $this->load->view("admin/mesin",$data);
    }

    public function pindahGrafik(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $this->load->view("admin/grafik");
    }

    public function tambahSparepart(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $this->load->view("admin/tambahsparepart");
    }

    public function tambahMesin(){
        if(!$this->session->userdata('admin')){
            redirect("Home");
        }
        $this->load->view("admin/tambahmesin");
    }
}
?>
