<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Calon extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data calon
    function index_get() {
        $calon = $this->get('id_calon');
        if ($calon == '') {
            $calon = $this->db->get('calon')->result();
        } else {
            $this->db->where('id_calon', $calon);
            $calon = $this->db->get('calon')->result();
        }
        $this->response($calon, 200);
    }

    //Menambahkan data calon baru
    function index_post() {
        $data = array(
                    'nama_calon' => $this->post('nama'),
                    'foto' => $this->post('foto'),
                    'visi' => $this->post('visi'),
                    'misi' => $this->post('misi'));
        $insert = $this->db->insert('calon', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Memperbarui salah satu data calon
    function index_put() {
        $calon = $this->put('id_calon');
        $data = array(
                    'id_calon' => $this->put('id_calon'),
                    'nama_calon' => $this->put('nama'),
                    'foto' => $this->put('foto'),
                    'visi' => $this->put('visi'),
                    'misi' => $this->put('misi'));
        $this->db->where('id_calon', $calon);
        $update = $this->db->update('calon', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Menghapus salah satu data calon
    function index_delete() {
        $calon = $this->delete('id_calon');
        $this->db->where('id_calon', $calon);
        $delete = $this->db->delete('calon');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>