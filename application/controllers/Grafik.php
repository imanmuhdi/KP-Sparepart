<?php

class Grafik extends CI_Controller {
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
        $data['tb_perbaikan1'] = $this->PerbaikanModel->getPerbaikanSparepart();
        $data['input'] = 0;
        $data['input2'] = NULL;
        $this->load->view("User/grafik",$data);
    }

    public function aturBulan(){
        $this->load->model("PerbaikanModel","",TRUE);
        $data['tb_perbaikan1'] = $this->PerbaikanModel->getPerbaikanSparepart();
        $data['tb_mesin'] = $this->PerbaikanModel->getPerbaikan2();
        $data['input'] = $this->input->post("bulan");
        $data['input2'] = $this->input->post("tahun");
        $this->load->view("User/grafik",$data);
        }


    /*function date_parts_iso($date) { //pemisah tahun,bulan,hari

    $year = 0;
    $month = 0;
    $day = 0;

    if (preg_match('/^(\d{4})-(\d{1,2})-(\d{1,2})([^\d].*)?$/', $date, $parts)) {
        if (isset($parts[1])) {
            $year = $parts[1];
        }

        if (isset($parts[2])) {
            $month = $parts[2];
        }

        if (isset($parts[3])) {
            $day = $parts[3];
        }
    }

        return array((int) $year, (int) $month, (int) $day);
    }*/
}
?>
