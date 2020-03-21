<?php

class JenisProduct extends CI_Controller {

  public function __construct(){
    parent::__construct();
    is_logged_in();
    $this->load->model('JenisProduct_model', 'jenis_product');
  }

  public function index(){
    $data['judul'] = "Jenis Product";

    $data['jenisProduct'] = $this->jenis_product->getAllJenisProduct();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar');
    $this->load->view('templates/admin_topbar', $data);
    $this->load->view('jenis_product/index', $data);
    $this->load->view('templates/admin_footer');
  }

  public function tambah_jenis(){

    $this->load->library('form_validation');

    $data['judul'] = 'Tambah Jenis Product';

    $this->form_validation->set_rules('nama_jenis', 'Nama Jenis Product', 'trim');
    $this->form_validation->set_rules('caption', 'Caption Gambar', 'trim');

    if($this->form_validation->run() == false){

      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar');
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('jenis_product/tambah_jenis', $data);
      $this->load->view('templates/admin_footer');
    } else {
      $this->jenis_product->tambahJenisProduct();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('jenisproduct');
    }
  }

  public function deleteJenisProduct($id){
    $this->jenis_product->deleteJenisProduct($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    redirect('jenisproduct');
  }

  public function updateJenisProduct($id){

    $this->load->library('form_validation');

    $data['judul'] = 'Update Jenis Product';

    $data['jenis_product'] = $this->db->get_where('jenis_product', ['id' => $id])->row();

    $this->form_validation->set_rules('nama_jenis', 'Nama Jenis Product', 'trim');
    $this->form_validation->set_rules('caption', 'Caption Gambar', 'trim');

    if($this->form_validation->run() == false){

      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar');
      $this->load->view('templates/admin_topbar', $data);
      $this->load->view('jenis_product/update_jenis', $data);
      $this->load->view('templates/admin_footer');
    } else {
      $this->jenis_product->updateJenisProduct();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('jenisproduct');
    }
  }
}