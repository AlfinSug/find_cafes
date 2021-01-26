<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model{
    public function GetDataRoti(){
        $data_roti = $this->db->query("SELECT * FROM roti");
        return $data_roti->result_array();
    }
}
?>