<?php
class Perbaikan extends CI_Controller {
    public function index(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        if($this->session->userdata('Admin'))
            $data['admin'] = $this->session->userdata('Admin');
        else
            $data['admin'] = false;

        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("User/perbaikan",$data);
    }

    public function perbaikanMesin1(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("PerbaikanModel","",TRUE);

        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("user/perbaikanMesin1",$data);
    }

    public function perbaikanMesin2(){
        if(!$this->session->userdata('User')){
            redirect("Home");
        }
        $this->load->model("PerbaikanModel","",TRUE);
        $data['tb_sparepart'] = $this->PerbaikanModel->getPerbaikan1();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $this->load->view("user/perbaikanMesin2",$data);
    }

    public function prosesTambah() {
        $this->load->model("PerbaikanModel","",TRUE);
        $loop = false;
        $loop2 = false;
        $row1 = 0;
        $row2 = 0;
        while($loop != TRUE && $loop2 != TRUE){
            if($this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin == $this->input->post("id")){
                    $loop = TRUE;
                }else{
                    $row1 = $row1 + 1;
                }
             if($this->PerbaikanModel->getPerbaikan1("kd_part")->row($row2)->kd_part == $this->input->post("kd")){
                    $loop2 = TRUE;
                }else{
                    $row2 = $row2 + 1;
                }
        }
        $perbaikan = array(
            "id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin,
            "kd_part" => $this->PerbaikanModel->getPerbaikan1("kd_part")->row($row2)->kd_part,
            "jml_part" => $this->input->post("jml_part"),
            "deskripsi" => $this->input->post("deskripsi")
        );
        if($this->PerbaikanModel->insertPerbaikan($perbaikan)) {
            redirect(site_url("user/pindahPerbaikan1"));
        } else {
            redirect(site_url('user/pindahPerbaikan1'));
        }
    }

    public function prosesTambah2() {
        $this->load->model("PerbaikanModel","",TRUE);
        $loop = false;
        $row1 = 0;
        while($loop != TRUE){
            if($this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin == $this->input->post("id")){
                    $loop = TRUE;
                }else{
                    $row1 = $row1 + 1;
                }
        }
        $perbaikan = array(
            "id_mesin" => $this->PerbaikanModel->getPerbaikan2("id_mesin")->row($row1)->id_mesin,
            "instansi" => $this->input->post("nama"),
            "deskripsi" => $this->input->post("deskripsi")
        );
        if($this->PerbaikanModel->insertPerbaikan2($perbaikan)) {
            redirect(site_url("user/pindahPerbaikan1"));
        } else {
            redirect(site_url('user/pindahPerbaikan1'));
        }
    }
    public function pdf(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan1'] = $this->PerbaikanModel->getPerbaikanSparepart('tb_perbaikan1')->result();

        $this->load->view('laporan_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_perbaikan.pdf", array('Attachment' =>0));
    }

    public function pdf2(){
        $this->load->model("PerbaikanModel","",TRUE);
        $this->load->library('dompdf_gen');

        $data['tb_perbaikan2'] = $this->PerbaikanModel->getPerbaikanTanpaSparepart('tb_perbaikan2')->result();

        $this->load->view('laporan_pdf2',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_perbaikan_Tanpa_sparepart.pdf", array('Attachment' =>0));
    }
}
?>
