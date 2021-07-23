<?php
class gudang_model extends CI_Model
{
    public function getAllgudang()
    {
        $query = $this->db->get('gudang');
        return $query->result_array();
    }
    public function addDataGudang()
    {
        $data = [
            "nama_gudang" => $this->input->post('namagudang'),
            "kepala_gudang" => $this->input->post('kepalagudang'),
            "alamat_gudang" => $this->input->post('alamatgudang'),
            "tanggal_masuk" => $this->input->post('tanggalmasuk')
        ];
        $this->db->insert('gudang', $data);
    }
    public function deleteDataGudang($id)
    {
        $this->db->where('nama_gudang', $id);
        $this->db->delete('gudang');
    }
}
