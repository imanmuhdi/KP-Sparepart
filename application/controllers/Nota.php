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
        $this->load->model('SparepartModel');
        $data['tb_perbaikan1'] = $this->NotaModel->getNota1ByNo($no)->row();
        $this->load->view("user/updatenota1",$data);
    }
    public function update2($no) {
        $this->load->model('NotaModel');
        $data['tb_perbaikan2'] = $this->NotaModel->getNota2ByNo($no)->row();
        $this->load->view("user/updatenota2",$data);
    }
    public function ambilmenit($jam){
        $waktu = $jam;
        $timestamp = strtotime($waktu);
        $menit = (float) date('i', $timestamp);
        return $menit;
    }
    public function prosesUpdate1() {
        $this->load->model("NotaModel","",TRUE);
        $this->load->model("SparepartModel","",TRUE);
        $tb_perbaikan1 = $this->NotaModel->getNota1ByNo($this->input->post("no"));
        
        $ceknilai = false;
        $ceknilai =$this->SparepartModel->editsaldo($this->input->post("kd_part"),$this->input->post("jml_part"),$tb_perbaikan1->row()->jml_part);
        $mulai = (float) $this->ambilmenit($this->input->post("mulai"));
        $selesai = (float) $this->ambilmenit($this->input->post("selesai"));
        $d_time = ($this->input->post("selesai")-$this->input->post("mulai"))+(($selesai-$mulai)/60);
        if($d_time <= 0){ //supaya jam tidak mines
            $d_time = $d_time+24;
        }
        $nota1 = array(
            "no" => $this->input->post("no"),
            "id_mesin" => $this->input->post("id_mesin"),
            "merk_m" => $this->input->post("merk"),
            "kd_part" => $this->input->post("kd_part"),
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
        if($ceknilai && $this->NotaModel->updatenota1($nota1)) {
            redirect(site_url("Nota/cetakNota1"));
        } else {
            redirect(site_url("user/invalidinput"));
        }
    }
    public function prosesUpdate2() {
        $this->load->model("NotaModel","",TRUE);
        $nota2 = array(
            "no" => $this->input->post("no"),
            "id_mesin" => $this->input->post("id_mesin"),
            "merk_m" => $this->input->post("merk_m"),
            "instansi" => $this->input->post("instansi"),
            "d_kerusakan" => $this->input->post("d_kerusakan"),
            "d_penyebab" => $this->input->post("d_penyebab"),
            "d_perbaikan" => $this->input->post("d_perbaikan"),
            "pengaju" => $this->input->post("pengaju"),
            "tanggal" => $this->input->post("tanggal"),
            "penyetuju" => $this->input->post("penyetuju")
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

    public function bonsparepart1($no){
        $this->load->model("NotaModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan1'] = $this->NotaModel->getNota1ByNo($no)->row();

        $this->load->view('bon_pdf1',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("bon_perbaikan_sparepart.pdf", array('Attachment' =>0));
    }

    public function bonsparepart2($no){
        $this->load->model("NotaModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan2'] = $this->NotaModel->getNota2ByNo($no)->row();

        $this->load->view('bon_pdf2',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("bon_tanpa_sparepart.pdf", array('Attachment' =>0));
    }
}