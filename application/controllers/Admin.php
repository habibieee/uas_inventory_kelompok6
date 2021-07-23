<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('supplier_model');
        $this->load->model('gudang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        // $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Welcome Admin';
        $data['copyright'] = 'Kelompok6';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_landing', $data);
        $this->load->view('templates/admin_footer');
    }
    public function tablebarang_admin()
    {
        // $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE BARANG';
        $data['barang'] = $this->barang_model->getAllbarang();
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/tables_barang', $data);
        $this->load->view('templates/admin_footer');
    }
    public function insertbarang()
    {
        //$data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE BARANG';
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->form_validation->set_rules('idbarang', 'IdBarang', 'required',);
        $this->form_validation->set_rules('namabarang', 'NamaBarang', 'required');
        $this->form_validation->set_rules('jenisbarang', 'JenisBarang', 'required');
        $this->form_validation->set_rules('jumlahbarang', 'JumlahBarang', 'required|trim|integer');
        $this->form_validation->set_rules('namasupplier', 'NamaSupplier', 'required');
        $this->form_validation->set_rules('emailsupplier', 'EmailSupplier', 'required|trim|valid_email');
        $this->form_validation->set_rules('tanggalmasuk', 'TanggalMasuk', 'required');
        $this->form_validation->set_rules('namagudang', 'NamaGudang', 'required');
        $this->form_validation->set_rules('alamatgudang', 'AlamatGudang', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_menubar');
            $this->load->view('admin/admin_insert_barang', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->barang_model->addDataBarang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di tambahkan</div>');
            redirect('admin/tablebarang_admin');
        }
    }
    public function tablegudang_admin()
    {
        //$data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE GUDANG';
        $data['gudang'] = $this->gudang_model->getAllgudang();
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');;
        $this->load->view('admin/tables_gudang', $data);
        $this->load->view('templates/admin_footer');
    }
    public function insertgudang()
    {
        //$data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE BARANG';
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->form_validation->set_rules('namagudang', 'NamaGudang', 'required');
        $this->form_validation->set_rules('kepalagudang', 'KepalaGudang', 'required');
        $this->form_validation->set_rules('alamatgudang', 'AlamatGudang', 'required');
        $this->form_validation->set_rules('tanggalmasuk', 'TanggalMasuk', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_menubar');
            $this->load->view('admin/admin_insert_gudang', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->gudang_model->addDataGudang();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di tambahkan</div>');
            redirect('admin/tablegudang_admin');
        }
    }
    public function tablesupplier_admin()
    {
        //$data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE SUPPLIER';
        $data['supplier'] = $this->supplier_model->getAllsupplier();
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/tables_supplier', $data);
        $this->load->view('templates/admin_footer');
    }
    public function insertsupplier()
    {
        //$data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE SUPPLIER';
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->form_validation->set_rules('idsupplier', 'IdSupplier', 'required|trim');
        $this->form_validation->set_rules('namasupplier', 'NamaSupplier', 'required');
        $this->form_validation->set_rules('alamatsupplier', 'AlamatSupplier', 'required');
        $this->form_validation->set_rules('emailsupplier', 'EmailSupplier', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_menubar');
            $this->load->view('admin/admin_insert_supplier', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->supplier_model->addDataSupplier();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil di tambahkan</div>');
            redirect('admin/tablesupplier_admin');
        }
    }
    public function deleteBarang($id)
    {
        $this->barang_model->deleteDataBarang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data Berhasil di hapus</div>');
        redirect('admin/tablebarang_admin');
    }
    public function deleteGudang($id)
    {
        $this->gudang_model->deleteDataGudang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data Berhasil di hapus</div>');
        redirect('admin/tablegudang_admin');
    }
    public function deleteSupplier($id)
    {
        $this->delete_model->deleteDataSupplier($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Berhasil di hapus</div>');
        redirect('admin/tablesupplier_admin');
    }
}