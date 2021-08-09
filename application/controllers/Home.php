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
        $email= $this->input->post('username');
        $password = md5($this->input->post('password'));
        $query = $this->UserModel->getUser($email,$password);
        if($query->num_rows()>0){
            $row = $query->row();
            if($row->admin == 1){
                $arr = array(
                    "Admin" => True,
                    "User" => True,
                    "Nama" => $row->Nama,
                    "NIK" => $row->NIK,
                    "Email" => $row->Email,
                    "Vote" => $row->Vote
                );
                $this->session->set_userdata($arr);
                redirect('Admin');
            }else{
                if($row->Akses == 0){
                    $arr = array(
                        "NoAkses" => True
                    );
                    echo "Tidak Memiliki Akses";
                }else{
                    $arr = array(
                        "User" => True,
						"Nama" => $row->Nama,
                        "NIK" => $row->NIK,
                        "Email" => $row->Email,
                        "Vote" => $row->Vote
                    );
                    $this->session->set_userdata($arr);
                    redirect('User');
                }
            }
        }else{
            redirect(site_url('home'));
        }
    }

    public function daftar(){
        $this->load->view('daftar');
    }

    public function prosesdaftar(){
        if($this->input->post('password') == $this->input->post('konfirmasi_password')){
            $user = array(
                "NIK" => $this->input->post('nik'),
                "Nama" => $this->input->post('nama'),
                "Email" => $this->input->post('email'),
                "Password" => md5($this->input->post('password'))
            );

            $this->load->model('UserModel',"",TRUE);
            
            $config['upload_path'] = './assets/image/ktp';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = $user['NIK']."_".$user['Nama'];

            if(!$this->UserModel->isNIKExist($user['NIK']) && !$this->UserModel->isEmailExist($user['Email'])){
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('file')){
                    redirect(site_url('home/message'));
                }else{
                    $upload_data = $this->upload->data();
                    $user['Foto'] = base_url('assets/image/ktp/').$upload_data['file_name'];
                    $user['admin'] = 0;
                    $user['Akses'] = 0;
                }

                $this->UserModel->insertUser($user);

                $session_data = array(
                    "Daftar" => true
                );
                $this->session->set_userdata($session_data);
                redirect(site_url('home/message'));
            }else{
                redirect(site_url('home/message'));
            }
        }else{
            $this->load->view('daftar');
        }
    }

    public function message(){
        if($this->session->userdata('Daftar')){
            $this->session->sess_destroy();
            $this->load->view("message/berhasildaftar");
        }else{
            $this->load->view("message/gagaldaftar");
        }
    }
    
    public function aboutus(){
        $this->load->view("aboutus");
    }
}
?>
