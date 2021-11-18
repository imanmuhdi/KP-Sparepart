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
        $parts = false;
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->model("SparepartModel","",TRUE);
        $parts = $this->SparepartModel->ceksaldo($this->input->post("kd"),$this->input->post("jml_part"));
        $this->SparepartModel->ketcek($this->input->post("kd"),$this->input->post("jml_part"));
        
        $mulai = (float) $this->ambilmenit($this->input->post("mulai"));
        $selesai = (float) $this->ambilmenit($this->input->post("selesai"));
        $d_time = ($this->input->post("selesai")-$this->input->post("mulai"))+(($selesai-$mulai)/60);
        if($d_time <= 0){ //supaya jam tidak mines
            $d_time = $d_time+24;
        }
        $perbaikan = array(
            "id_mesin" => $this->input->post("id"),
            "merk_m" => $this->input->post("merk"),
            "kd_part" => $this->input->post("kd"),
            "type" => $this->input->post("type"),
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

        if($parts && $this->PerbaikanModel->insertPerbaikan($perbaikan)) {
            redirect(site_url("user/pindahPerbaikan1"));
        } else {
            redirect(site_url('user/invalidinput'));
        }
    }

    public function prosesTambah2() {
        $this->load->model("PerbaikanModel","",TRUE);
        $perbaikan = array(
            "id_mesin" => $this->input->post("id"),
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
/*
    public function pdf(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan1'] = $this->PerbaikanModel->getPerbaikanSparepart('tb_perbaikan1')->result();

        $this->load->view('laporan_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_perbaikan.pdf", array('Attachment' =>0));
    }

    public function pdf2(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan2'] = $this->PerbaikanModel->getPerbaikanTanpaSparepart('tb_perbaikan2')->result();

        $this->load->view('laporan_pdf2',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_perbaikan_Tanpa_sparepart.pdf", array('Attachment' =>0));
    }
    =================================================DOM PDF VERSI LAMA====================================
    */
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
