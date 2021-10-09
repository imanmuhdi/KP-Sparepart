<?php
class Nota extends CI_Controller {
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("NotaModel","",TRUE);

        $data['tb_perbaikan1'] = $this->NotaModel->getNota1();
        $data['tb_perbaikan2'] = $this->NotaModel->getNota2();
        $this->load->view("User/nota",$data);
    }

    public function cetakNota1(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("NotaModel","",TRUE);

        $data['tb_perbaikan1'] = $this->NotaModel->getNota1();
        $data['tb_perbaikan2'] = $this->NotaModel->getNota2();
        $this->load->view("user/cetakNota1",$data);
    }

    public function cetakNota2(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("NotaModel","",TRUE);
        $data['tb_perbaikan1'] = $this->NotaModel->getNota1();
        $data['tb_perbaikan2'] = $this->NotaModel->getNota2();
        $this->load->view("user/cetakNota2",$data);
    }

    public function hapus($no) {
        $this->load->model("NotaModel","",TRUE);
        $this->NotaModel->deleteNota1($no);
        redirect(site_url("Nota/cetakNota1"));
    }
}