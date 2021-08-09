<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('nik');
        if ($id == '') {
            $user = $this->db->get('user')->result();
        } else {
            $this->db->where('nik', $id);
            $user = $this->db->get('user')->result();
        }
        $this->response($user, 200);
    }

    //Menambahkan data user baru
    function index_post() {
        $data = array(
                    'NIK' => $this->post('nik'),
                    'Nama' => $this->post('nama'),
                    'Email' => $this->post('email'),
                    'Password' => $this->post('password'),
                    'Foto' => $this->post('foto'));
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Memperbarui salah satu data user
    function index_put() {
        $id = $this->put('nik');
        $data = array(
                    'NIK' => $this->put('nik'),
                    'Nama' => $this->put('nama'),
                    'Email' => $this->put('email'),
                    'Password' => $this->put('password'),
                    'Foto' => $this->put('foto'));
        $this->db->where('nik', $id);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    //Menghapus salah satu data user
    function index_delete() {
        $id = $this->delete('nik');
        $this->db->where('nik', $id);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>