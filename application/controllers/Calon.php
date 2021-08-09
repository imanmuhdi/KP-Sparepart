<?php
class Calon extends CI_Controller {
	public function index() {
		$this->load->library("table");
		$this->load->model('CalonModel','','TRUE');
		$data['calon'] = $this->CalonModel->getCalon();
		if ($this->session->userdata('Admin')) {
			$this->load->view("admin/calon", $data);
		} else {
			$this->load->view("Admin");
		}
	}
	public function __construct() {
		parent::__construct();
		$this->load->model("CalonModel","",TRUE);
	}
	public function tambah() {
		$this->load->model('CalonModel');
		$data['calon'] = $this->CalonModel->getCalon();
		$this->load->view("admin/tambah",$data);
	}
	public function prosesTambah() {
		$calon = array(
			"id_calon" => "",
			"nama_calon" => $this->input->post("nama")
		);
		
		$config['upload_path'] = './assets/image/calon';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->input->post("nama");

		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			redirect(site_url('admin/pindahCalon?GagalTambahCalon'));
		}else{
			$upload_data = $this->upload->data();
			$calon['foto'] = base_url('assets/image/calon/').$upload_data['file_name'];
			$calon['visi'] = $this->input->post('visi');
			$calon['misi'] = $this->input->post('misi');
			$calon['suara'] = 0;
		}

		if($this->CalonModel->insertCalon($calon)) {
			redirect(site_url("admin/pindahCalon?BerhasilTambahCalon"));
		} else {
			redirect(site_url('admin/pindahCalon?GagalTambahCalon'));
		}
	}
	public function update($id) {
		$this->load->model('CalonModel');
		$data['calon'] = $this->CalonModel->getCalonById($id)->row();
		$this->load->view("Admin/calon_update",$data);
	}
	public function prosesUpdate($id) {
		$this->load->helper('file'); //file helper untuk hapus foto
        $nama = str_replace(" ","_",$this->CalonModel->getCalonById($id)->row()->nama_calon);
        $ekstensiFile = explode('.',$this->CalonModel->getCalonById($id)->row()->foto)[1];
        $path = $nama.".".$ekstensiFile; //path foto
		if(!unlink("./assets/image/calon/".$path)){
			redirect(site_url("calon/update/$id"));
		}

		$calon = array(
			"id_calon" => $id,
			"nama_calon" => $this->input->post("nama")
		);

		$config['upload_path'] = './assets/image/calon';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->input->post("nama");

		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			redirect(site_url("calon/update/$id"));
		}else{
			$upload_data = $this->upload->data();
			$calon['foto'] = base_url('assets/image/calon/').$upload_data['file_name'];
			$calon['visi'] = $this->input->post('visi');
			$calon['misi'] = $this->input->post('misi');

			
			if($this->CalonModel->updateCalon($calon)) {
				redirect(site_url("calon"));
			}else{
				redirect(site_url("calon/update/$id"));
			}
			
		}
	}

	public function hapus($id) {
		$this->load->helper('file'); //file helper untuk hapus foto
        $nama = str_replace(" ","_",$this->CalonModel->getCalonById($id)->row()->nama_calon);
        $ekstensiFile = explode('.',$this->CalonModel->getCalonById($id)->row()->foto)[1];
        $path = $nama.".".$ekstensiFile; //path foto
		if(!unlink("./assets/image/calon/".$path)){
			redirect(site_url("calon/update/$id"));
		}
		$this->CalonModel->deleteCalon($id);
		redirect(site_url("calon"));
	}
	
	public function vote($id){
		$this->load->model('CalonModel',"",TRUE);
		$this->load->model('UserModel',"",TRUE);
		$this->CalonModel->updateSuara($id);
		$this->UserModel->updateVote($this->session->userdata("NIK"),$id);
		$this->session->set_userdata('Vote',$id);
		redirect(site_url("live"));
	}
}
?>
