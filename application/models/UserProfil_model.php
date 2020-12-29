<?php

class UserProfil_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user_profil')->result_array();
    }
}
