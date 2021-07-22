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
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_barang', $data);
        $this->load->view('templates/admin_footer');
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
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_gudang', $data);
        $this->load->view('templates/admin_footer');
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
        $data['title'] = 'TABLE BARANG';
        $data['copyright'] = 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_supplier', $data);
        $this->load->view('templates/admin_footer');
    }
}