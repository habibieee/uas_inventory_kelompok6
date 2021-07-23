<?php
class supplier_model extends CI_Model
{
    public function getAllsupplier()
    {
        $query = $this->db->get('supplier');
        return $query->result_array();
    }
    public function addDataSupplier()
    {
        $data = [
            "id_supplier" => $this->input->post('idsupplier'),
            "nama_supplier" => $this->input->post('namasupplier'),
            "alamat_supplier" => $this->input->post('alamatsupplier'),
            "email_supplier" => $this->input->post('emailsupplier')
        ];
        $this->db->insert('supplier', $data);
    }
    public function deleteDataSupplier($id)
    {
        $this->db->where('id_supplier', $id);
        $this->db->delete('supplier');
    }
}