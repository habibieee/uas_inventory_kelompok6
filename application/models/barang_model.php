<?php
class barang_model extends CI_Model
{
    public function getAllbarang()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    public function addDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('idbarang'),
            "nama_barang" => $this->input->post('namabarang'),
            "jenis_barang" => $this->input->post('jenisbarang'),
            "jumlah_barang" => $this->input->post('jumlahbarang'),
            "nama_supplier " => $this->input->post('namasupplier'),
            "email_supplier" => $this->input->post('emailsupplier'),
            "tanggal_masuk" => $this->input->post('tanggalmasuk'),
            "nama_gudang " => $this->input->post('namagudang'),
            "alamat_gudang " => $this->input->post('alamatgudang'),
        ];
        $this->db->insert('barang', $data);
    }
    public function deleteDataBarang($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
}