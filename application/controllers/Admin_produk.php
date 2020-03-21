<?php

class Admin_produk extends CI_Controller {

  public function __construct(){
    parent::__construct();
    is_logged_in();
    $this->load->model('Admin_produk_model', 'admin_produk');
  }


  public function index(){

    

    $data['judul'] = "Admin Product";

    if($this->input->post('submit')){
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    $data['admin_produk'] = $this->admin_produk->getAllProduct($data['keyword']);

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar');
    $this->load->view('templates/admin_topbar');
    $this->load->view('admin_produk/index');
    $this->load->view('templates/admin_footer');
  }

  

  public function tambah_produk(){
    $this->load->library('form_validation');

    $data['judul'] = 'Tambah Produk';

    $data['jenis_produk'] = $this->db->select("id, nama_jenis")->get("jenis_product")->result();

    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
    $this->form_validation->set_rules('caption', 'Nama Produk', 'trim');
  
    if($this->form_validation->run() == false){
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar');
      $this->load->view('templates/admin_topbar');
      $this->load->view('admin_produk/tambah_produk');
      $this->load->view('templates/admin_footer');
    } else {
      $this->admin_produk->tambahProduk();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('admin_produk');
    }
  }

  public function deleteProduk($id){
    $this->admin_produk->deleteProduk($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    redirect('produk');
  }
  
}