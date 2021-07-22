<?php
class gudang_model extends CI_Model
{
    public function getAllgudang()
    {
        $query= $this->db->get('gudang');
        return $query->result_array();
    }
}