<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        // $data['username'] = $this->db->get_where('login', ['email' => $this->session->userdata('email')])->row_array();
        // echo "selamat datang " . $data['username'];
        // var_dump($data['username']);
        // die;
        $data['title'] = 'Welcome Admin';
        $data['copyright']= 'Kelompok6';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_landing',$data);
        $this->load->view('templates/admin_footer');
    }
    public function tablebarang_admin(){
        $data['title'] = 'TABLE BARANG';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/tables_barang',$data);
        $this->load->view('templates/admin_footer');
    }
    public function insertbarang(){
        $data['title'] = 'TABLE BARANG';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_barang',$data);
        $this->load->view('templates/admin_footer');
    }
    public function tablegudang_admin(){
        $data['title'] = 'TABLE GUDANG';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');;
        $this->load->view('admin/tables_gudang',$data);
        $this->load->view('templates/admin_footer');
    }
    public function insertgudang(){
        $data['title'] = 'TABLE BARANG';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_gudang',$data);
        $this->load->view('templates/admin_footer');
    }
    public function tablesupplier_admin(){
        $data['title'] = 'TABLE SUPPLIER';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/tables_supplier',$data);
        $this->load->view('templates/admin_footer');
    }
    public function insertsupplier(){
        $data['title'] = 'TABLE BARANG';
        $data['copyright']= 'Kelompok6-2021-UAS';
        $this->load->view('templates/admin_header', $data);   
		$this->load->view('templates/admin_menubar');
        $this->load->view('admin/admin_insert_supplier',$data);
        $this->load->view('templates/admin_footer');
    }

}