<?php

class CafeProfil_model extends CI_Model
{
    public function getAllCafe()
    {
        return $this->db->get('cafe_profil')->result_array();
    }

    public function getCafeRecommended()
    {
        $sql = $this->db->query('SELECT * FROM cafe_profil LIMIT 0, 4');
        return $sql->result_array();
    }
}
