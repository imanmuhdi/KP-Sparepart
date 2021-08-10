<?php
class Sparepart extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
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
        $sparepart = array(
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
            $sparepart['foto'] = base_url('assets/image/calon/').$upload_data['file_name'];
            $sparepart['visi'] = $this->input->post('visi');
            $sparepart['misi'] = $this->input->post('misi');
            $sparepart['suara'] = 0;
        }

        if($this->CalonModel->insertCalon($sparepart)) {
            redirect(site_url("admin/pindahSparepart"));
        } else {
            redirect(site_url('admin/pindahCalon?GagalTambahCalon'));
        }
    }
}
?>
