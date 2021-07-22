<?php
class barang_model extends CI_Model
{
    public function getAllbarang()
    {
        $query= $this->db->get('barang');
        return $query->result_array();
    }
}