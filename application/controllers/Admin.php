<?php
class Admin extends CI_Controller{
    public function index(){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $data['nama'] = $this->session->userdata('Nama');
        $this->load->view("admin/admin",$data);
    }

    public function hapus($NIK){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $this->load->model('UserModel',"",TRUE);
        $this->load->helper('file'); //file helper untuk hapus foto
        $nama = str_replace(" ","_",$this->UserModel->getPathFoto($NIK)->row()->Nama);
        $ekstensiFile = explode('.',$this->UserModel->getPathFoto($NIK)->row()->Foto)[1];
        $path = $NIK."_".$nama.".".$ekstensiFile; //path foto
        
        if(unlink("./assets/image/ktp/".$path)){
            $config['mailtype'] = "text";
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "smtp.mailtrap.io";
            $config['smtp_user'] = '5608aea90a8b13';
            $config['smtp_pass'] = '2efde28f00e5f0';
            $config['smtp_port'] = 25;
            $config['newline'] = "\r\n";

            $this->load->library('email', $config);

            $this->email->from('no-reply@ayovote.com', 'Sistem Voting Online Indonesia');
            $to_email = $this->UserModel->getEmail($NIK)->row()->Email;
            echo $to_email;
            $this->email->to($to_email);
            $this->email->subject('Akses Tertolak');
            $this->email->message('Hallo, Maaf akses ke sistem ditolak karena ketidak sesuaian data input, harap daftar kembali dengan data yang benar');
            
            if($this->email->send()){
                $this->UserModel->deleteUser($NIK);
                $this->load->view("message/berhasiltolak");
            }else
                redirect("Admin?GagalTolakAkun");
        }else{
            redirect("Admin?GagalTolakAkun");
        }
    }

    public function terima($NIK){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $this->load->model('UserModel',"",TRUE);
        $this->UserModel->updateAkses($NIK);
        $config['mailtype'] = "text";
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "smtp.mailtrap.io";
        $config['smtp_user'] = '5608aea90a8b13';
        $config['smtp_pass'] = '2efde28f00e5f0';
        $config['smtp_port'] = 25;
        $config['newline'] = "\r\n";

        $this->load->library('email', $config);

        $this->email->from('no-reply@ayovote.com', 'Sistem Voting Online Indonesia');
        $to_email = $this->UserModel->getEmail($NIK)->row()->Email;
        $this->email->to($to_email);
        $this->email->subject('Akses Diterima');
        $this->email->message('Hallo, Selamat! Anda berhasil terdaftar di website coblos online!');
            
        if($this->email->send()){
            $this->load->view("message/berhasilkonfirm");
        }else
            redirect("Admin?GagalKonfirmasi");
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Home');
    }
	
	public function pindahCalon(){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $this->load->model('CalonModel',"",TRUE);
        $data['calon'] = $this->CalonModel->getCalon();
        $this->load->view("admin/calon",$data);
    }

    public function pindahKonfirm(){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $this->load->model('UserModel',"",TRUE);
        $data['user'] = $this->UserModel->getUserNoAkses();
        $this->load->view("admin/konfirmasi",$data);
    }

    public function tambahCalon(){
        if(!$this->session->userdata('Admin')){
            redirect("Home");
        }
        $this->load->view("admin/tambah");
    }
}
?>
