<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Anggota extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $id_anggota = $this->get('id_anggota');
        if ($id_anggota == '') {
            $anggota = $this->db->get('anggota')->result();
        } else {
            $this->db->where('id_anggota', $id_anggota);
            $anggota = $this->db->get('anggota')->result();
        }
        $this->response($anggota, 200);
    }
}