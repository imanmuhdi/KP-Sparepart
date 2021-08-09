<?php
class Live extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("CalonModel","",TRUE);

        $data['calon'] = $this->CalonModel->getCalon();
        $data['vote'] = $this->session->userdata('Vote');
        $this->load->view("User/live",$data);
    }
}
?>