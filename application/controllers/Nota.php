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
    public function update($no) {
        $this->load->model('NotaModel');
        $data['tb_perbaikan1'] = $this->NotaModel->getNota1ByNo($no)->row();
        $this->load->view("user/updatenota1",$data);
    }
    public function update2($no) {
        $this->load->model('NotaModel');
        $data['tb_perbaikan2'] = $this->NotaModel->getNota2ByNo($no)->row();
        $this->load->view("user/updatenota2",$data);
    }
    public function prosesUpdate1() {
        $this->load->model("NotaModel","",TRUE);
        $nota1 = array(
            "no" => $this->input->post("no"),
            "id_mesin" => $this->input->post("id_mesin"),
            "kd_part" => $this->input->post("kd_part"),
            "jml_part" => $this->input->post("jml_part"),
            "deskripsi" => $this->input->post("deskripsi")
        );
        if($this->NotaModel->updatenota1($nota1)) {
            redirect(site_url("Nota/cetakNota1"));
        } else {
            echo "GAGAL UPDATE";
            redirect(site_url('Nota/cetakNota1'));
        }
    }
    public function prosesUpdate2() {
        $this->load->model("NotaModel","",TRUE);
        $nota2 = array(
            "no" => $this->input->post("no"),
            "id_mesin" => $this->input->post("id_mesin"),
            "instansi" => $this->input->post("instansi"),
            "deskripsi" => $this->input->post("deskripsi")
        );
        if($this->NotaModel->updatenota2($nota2)) {
            redirect(site_url("Nota/cetakNota2"));
        } else {
            echo "GAGAL UPDATE";
            redirect(site_url('Nota/cetakNota2'));
        }
    }
    public function hapus($no) {
        $this->load->model("NotaModel","",TRUE);
        $this->NotaModel->deleteNota1($no);
        redirect(site_url("Nota/cetakNota1"));
    }
    public function hapus2($no) {
        $this->load->model("NotaModel","",TRUE);
        $this->NotaModel->deleteNota2($no);
        redirect(site_url("Nota/cetakNota2"));
    }
}