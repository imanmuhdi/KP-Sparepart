<?php

class Grafik extends CI_Controller {
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
        $this->load->view("User/grafik",$data);
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
        $loop = false;
        $loop2 = false;
        $row1 = 0;
        $row2 = 0;
        $row3 = 0;
        while($loop != TRUE && $loop2 != TRUE){
            if($this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin == $this->input->post("id")){
                    $loop = TRUE;
                }else{
                    $row1 = $row1 + 1;
                }
             if($this->PerbaikanModel->getPerbaikan1("kd_part")->row($row2)->kd_part == $this->input->post("kd")){
                    $loop2 = TRUE;
                }else{
                    $row2 = $row2 + 1;
                }
                if($this->PerbaikanModel->getPerbaikan1("type")->row($row3)->type == $this->input->post("type")){
                    $loop2 = TRUE;
                }else{
                    $row2 = $row2 + 1;
                }
        }
        $mulai = (float) $this->ambilmenit($this->input->post("mulai"));
        $selesai = (float) $this->ambilmenit($this->input->post("selesai"));
        $d_time = ($this->input->post("selesai")-$this->input->post("mulai"))+(($selesai-$mulai)/60);
        if($d_time <= 0){ //supaya jam tidak mines
            $d_time = $d_time+24;
        }
        $perbaikan = array(
            "id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin,
            "merk_m" => $this->input->post("merk"),
            "kd_part" => $this->PerbaikanModel->getPerbaikan1("kd_part")->row($row2)->kd_part,
            "type" => $this->PerbaikanModel->getPerbaikan1("type")->row($row3)->type,
            "jml_part" => $this->input->post("jml_part"),
            "deskripsi" => $this->input->post("deskripsi"),
            "deskripsi2" => $this->input->post("deskripsi2"),
            "perbaikan" => $this->input->post("perbaikan"),
            "hasil" => $this->input->post("hasil"),
            "lokasi" => $this->input->post("lokasi"),
            "oleh" => $this->input->post("oleh"),
            "tgl" => $this->input->post("tgl"),
            "mulai" => $this->input->post("mulai"),
            "selesai" => $this->input->post("selesai"),
            "d_time" => $d_time,
            "penyetuju" => $this->input->post("penyetuju"),
            "pelaksana" => $this->input->post("pelaksana")
        );
        if($this->PerbaikanModel->insertPerbaikan($perbaikan)) {
            redirect(site_url("user/pindahPerbaikan1"));
        } else {
            redirect(site_url('user/pindahPerbaikan1'));
        }
    }

    public function prosesTambah2() {
        $this->load->model("PerbaikanModel","",TRUE);
        $loop = false;
        $row1 = 0;
        while($loop != TRUE){
            if($this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin == $this->input->post("id")){
                    $loop = TRUE;
                }else{
                    $row1 = $row1 + 1;
                }
        }
        $perbaikan = array(
            "id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin,
            "merk_m" => $this->input->post("merk"),
            "instansi" => $this->input->post("instansi"),
            "d_kerusakan" => $this->input->post("d_kerusakan"),
            "d_penyebab" => $this->input->post("d_penyebab"),
            "d_perbaikan" => $this->input->post("d_perbaikan"),
            "pengaju" => $this->input->post("pengaju"),
            "tanggal" => $this->input->post("tanggal"),
            "penyetuju" => $this->input->post("penyetuju")
        );
        if($this->PerbaikanModel->insertPerbaikan2($perbaikan)) {
            redirect(site_url("user/pindahPerbaikan1"));
        } else {
            redirect(site_url('user/pindahPerbaikan1'));
        }
    }

    public function ambilmenit($jam){
        $waktu = $jam;
        $timestamp = strtotime($waktu);
        $menit = (float) date('i', $timestamp);
        return $menit;
    }
    public function pdf3(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('mypdf');

        $data['tb_perbaikan1'] = $this->PerbaikanModel->getPerbaikanSparepart('tb_perbaikan1')->result();

        $this->mypdf->generate('laporan_pdf',$data);
    }

    public function pdf4(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('mypdf');

        $data['tb_perbaikan2'] = $this->PerbaikanModel->getPerbaikanTanpaSparepart('tb_perbaikan2')->result();

        $this->mypdf->generate('laporan_pdf2',$data);
    }

}
?>
