<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        // $data['username'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        // echo "selamat datang " . $data['username'];
        // var_dump($data['username']);
        // die;
        $data['title'] = 'Welcome User';
        $this->load->view('templates/dashboard_header', $data);   
		$this->load->view('templates/dashboard_menubar');
        $this->load->view('user/user_landing');
        $this->load->view('templates/dashboard_footer');
    }
    public function tablebarang(){
        $data['title'] = 'TABLE BARANG';
        $this->load->view('templates/dashboard_header', $data);   
		$this->load->view('templates/dashboard_menubar');
        $this->load->view('user/tables_barang');
        $this->load->view('templates/dashboard_footer');
    }
    public function tablegudang(){
        $data['title'] = 'TABLE GUDANG';
        $this->load->view('templates/dashboard_header', $data);   
		$this->load->view('templates/dashboard_menubar');
        $this->load->view('user/tables_gudang');
        $this->load->view('templates/dashboard_footer');
    }
    public function tablesupplier(){
        $data['title'] = 'TABLE SUPPLIER';
        $this->load->view('templates/dashboard_header', $data);   
		$this->load->view('templates/dashboard_menubar');
        $this->load->view('user/tables_supplier');
        $this->load->view('templates/dashboard_footer');
    }
}