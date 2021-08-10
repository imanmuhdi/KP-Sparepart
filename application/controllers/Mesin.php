<?php
class Mesin extends CI_Controller{
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
        $data['mesin'] = $this->session->userdata('Mesin');
        $this->load->view("User/mesin",$data);
    }

    public function __construct() {
        parent::__construct();
        $this->load->model("MesinModel","",TRUE);
    }

    public function prosesTambah() {
        $mesin = array(
            "id_calon" => "",
            "nama_calon" => $this->input->post("kodesp")
        );

        $config['upload_path'] = './assets/image/calon';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->input->post("nama");

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto')){
            redirect(site_url('admin/pindahCalon?GagalTambahCalon'));
        }else{
            $upload_data = $this->upload->data();
            $mesin['foto'] = base_url('assets/image/calon/').$upload_data['file_name'];
            $mesin['visi'] = $this->input->post('visi');
            $mesin['misi'] = $this->input->post('misi');
            $mesin['suara'] = 0;
        }

        if($this->CalonModel->insertCalon($mesin)) {
            redirect(site_url("admin/pindahSparepart"));
        } else {
            redirect(site_url('admin/pindahCalon?GagalTambahCalon'));
        }
    }
}
?>
