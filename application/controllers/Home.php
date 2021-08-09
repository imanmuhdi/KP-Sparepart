<?php
class Home extends CI_Controller{

    public function index(){
        if($this->session->userdata('User')){
            redirect("User");
        }else if($this->session->userdata('Admin')){
            redirect("Admin");
        }else{
            $this->load->view("login");
        }
    }

    public function login(){
        $this->load->view("login");
    }

    public function proseslogin(){
        $this->load->model('UserModel',"",TRUE);
        $username= $this->input->post('username');
        $password = md5($this->input->post('password'));
        $query = $this->UserModel->getUser($username,$password);
        if($query->num_rows()>0){
            $row = $query->row();
            if($row->admin == 1){
                $arr = array(
                    "admin" => True,
                    "user" => True,
                    "nama" => $row->nama,
                    "username" => $row->username
                );
                $this->session->set_userdata($arr);
                redirect('Admin');
                }else{
                    $arr = array(
                        "User" => True,
						"nama" => $row->nama,
                        "username" => $row->username
                    );
                    $this->session->set_userdata($arr);
                    redirect('User');
                }
        }else{
            redirect(site_url('home'));
        }
    }
    
    public function aboutus(){
        $this->load->view("aboutus");
    }
}
?>
