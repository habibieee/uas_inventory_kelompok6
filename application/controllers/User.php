<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Welcome User';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_menubar', $data);
        $this->load->view('user/user_landing', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function tablebarang()
    {
        $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE BARANG';
        $data['barang'] = $this->barang_model->getAllbarang();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_menubar', $data);
        $this->load->view('user/tables_barang', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function tablegudang()
    {
        $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE GUDANG';
        $data['gudang'] = $this->gudang_model->getAllgudang();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_menubar', $data);
        $this->load->view('user/tables_gudang', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function tablesupplier()
    {
        $data = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'TABLE SUPPLIER';
        $data['supplier'] = $this->supplier_model->getAllsupplier();
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('templates/dashboard_menubar', $data);
        $this->load->view('user/tables_supplier', $data);
        $this->load->view('templates/dashboard_footer');
    }
}