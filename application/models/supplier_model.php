<?php
class supplier_model extends CI_Model
{
    public function getAllsupplier()
    {
        $query= $this->db->get('supplier');
        return $query->result_array();
    }
}