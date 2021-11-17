<?php
class Sparepart extends CI_Controller {
    public function index() {
        if(!$this->session->userdata('User')) {
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("SparepartModel","",TRUE);
        
        $data['tb_sparepart'] = $this->SparepartModel->getSparepart();
        $data['sparepart'] = $this->session->userdata('Sparepart');
        $this->load->view("User/sparepart",$data);
    }

    public function prosesTambah() {
        $this->load->model("SparepartModel","",TRUE);
        $sparepart = array(
            "kd_part" => $this->input->post("kodesp"),
            "nama_part" => $this->input->post("namasp"),
            "type" => $this->input->post("tipesp"),
            "saldo_awal" => $this->input->post("saldoawal"),
            "masuk" => $this->input->post("masuk"),
            "keluar" => $this->input->post("keluar"),
            "saldo_akhir" => $this->input->post("saldoakhir"),
            "stock_minimal" => $this->input->post("minimal")
        );
        //foto
        
        $config['upload_path'] = './assets/image/sparepart'; //lokasi penyimpanan foto
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->input->post("namasp");

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto')){
            redirect(site_url('admin/pindahSparepart'));
        }else{
            $upload_data = $this->upload->data();
            $sparepart['foto'] = base_url('assets/image/sparepart/').$upload_data['file_name'];
        }
        //akhir foto

        if($this->input->post("minimal") <= $this->input->post("saldoakhir")){
            $sparepart['keterangan'] = "OK";
        }else {
            $sparepart['keterangan'] = "PESAN ULANG";
        }
        
        if($this->SparepartModel->insertSparepart($sparepart)) {
            redirect(site_url("admin/pindahSparepart"));
        } else {
            redirect(site_url('admin/pindahSparepart'));
        }
    }

    public function hapus($kode) {
        $this->load->model("SparepartModel","",TRUE);
        $this->load->model("PerbaikanModel","",TRUE);
        $this->PerbaikanModel->deleteKDsparepart1($kode);
        $this->SparepartModel->deleteSparepart($kode);
        redirect(site_url("admin/pindahSparepart"));
    }

    public function update($kode) {
        $this->load->model('SparepartModel');
        $data['tb_sparepart'] = $this->SparepartModel->getSparepartByKd($kode)->row();
        $this->load->view("Admin/updatesparepart",$data);
    }

    public function prosesUpdate() {
        $this->load->model("SparepartModel","",TRUE);

        $sparepart = array(
            "kd_part" => $this->input->post("kodesp"),
            "nama_part" => $this->input->post("namasp"),
            "type" => $this->input->post("tipesp"),
            "saldo_awal" => $this->input->post("saldoawal"),
            "masuk" => $this->input->post("masuk"),
            "keluar" => $this->input->post("keluar"),
            "saldo_akhir" => $this->input->post("saldoakhir"),
            "stock_minimal" => $this->input->post("minimal")
        );
        //foto
        if(!empty($_FILES['foto'])){
            $config['upload_path'] = './assets/image/sparepart'; //lokasi penyimpanan foto
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $this->input->post("namasp");

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                redirect(site_url('admin/pindahSparepart'));
            }else{
                $upload_data = $this->upload->data();
                $sparepart['foto'] = base_url('assets/image/sparepart/').$upload_data['file_name'];
            }
        }else if(empty($_FILES['foto'])){
            $sparepart['foto'] = $this->SparepartModel->getFoto($this->input->post("kodesp"));
        }
        //akhir foto
        if($this->input->post("minimal") <= $this->input->post("saldoakhir")){
            $sparepart['keterangan'] = "OK";
        }else if($this->input->post("minimal") > $this->input->post("saldoakhir")){
            $sparepart['keterangan'] = "PESAN ULANG";
        }
        if($this->SparepartModel->updateSparepart($sparepart)) {
            redirect(site_url("admin/pindahSparepart"));
        }else{
            echo "GAGAL UPDATE";
            redirect(site_url('admin/pindahSparepart'));
        }
    }
}
?>
