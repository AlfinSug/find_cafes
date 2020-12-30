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

    public function edit_profil_owner($id_cafe, $data)
    {

        $this->db->set($data);
        $this->db->where('id_cafe', $id_cafe);
        $this->db->update('cafe_profil');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
