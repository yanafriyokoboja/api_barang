<?php


require APPPATH . '/libraries/REST_Controller.php';

class Kontak_android extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    //Menampilkan data kontak
    function index_get() { 
        $kontak = $this->db->get('telepon')->result();
        $this->response(array("result"=>$kontak, 200));
    }

}
?>