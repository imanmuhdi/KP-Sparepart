<?php
class Mesin extends CI_Controller{
    public function __construct()
        {
                parent::__construct();
                $this->load->model("MesinModel","",TRUE);
        }

    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("MesinModel","",TRUE);

        $data['tb_mesin'] = $this->MesinModel->getMesin();
        $this->load->view("User/mesin",$data);
    }

    public function prosesTambah() {
        $mesin = array(
            "id_mesin" => $this->input->post("idm"),
            "jam_op" => $this->input->post("jom"),
            "target_down" => $this->input->post("tdm"),
            "type_m" => $this->input->post("tmm"),
            "merk_m" => $this->input->post("mmm"),
            "no_m" => $this->input->post("nmm"),
            "tahun" => $this->input->post("tm")
        );
        
        if($this->MesinModel->insertMesin($mesin)) {
            redirect(site_url("admin/pindahMesin"));
        } else {
            redirect(site_url('admin/pindahMesin'));
        }
    }

    public function hapus($id) {
        echo $id;
        $this->load->model("PerbaikanModel","",TRUE);
        $this->PerbaikanModel->deleteIDmesin1($id);
        $this->PerbaikanModel->deleteIDmesin2($id);
        $this->MesinModel->deleteMesin($id);
        redirect(site_url("admin/pindahMesin"));
    }

    public function update($id) {
        $this->load->model('SparepartModel');
        $data['tb_mesin'] = $this->MesinModel->getMesinById($id)->row();
        $this->load->view("Admin/updatemesin",$data);
    }

    public function prosesUpdate() {
        $mesin = array(
            "id_mesin" => $this->input->post("idm"),
            "jam_op" => $this->input->post("jom"),
            "down_time" => $this->input->post("dtm"),
            "target_down" => $this->input->post("tdm"),
            "type_m" => $this->input->post("tmm"),
            "merk_m" => $this->input->post("mmm"),
            "no_m" => $this->input->post("nmm"),
            "tahun" => $this->input->post("tm")
        );
        
        if($this->MesinModel->updateMesin($mesin)) {
            redirect(site_url("admin/pindahMesin"));
        } else {
            redirect(site_url('admin/pindahMesin'));
        }
    }
}
?>
