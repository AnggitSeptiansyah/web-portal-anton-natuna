<?php

class Product extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("Product_model", "product");
  }
  
  public function index(){

    $data['meta_description'] = "CV. Anton Natuna merupakan perusahaan yang bergerak dibidang percetakan. Berikut produk produk yang dijual pada CV. Anton Natuna";

    $data['judul'] = 'Product Product CV. Anton Natuna';

    $data['product'] = $this->product->getAllJenisProduct();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('product/index', $data);
    $this->load->view('templates/footer');
  }

  public function data_product($id){

    $data['meta_description'] = "Produk produk yang dijual oleh CV. Anton Natuna";
    $data['judul'] = 'Detail Product';

    $data['jenis_product'] = $this->product->getDetailJenisProduct($id);
    $data['produk'] = $this->product->getDetailProduct($id);
        
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('product/data_product', $data);
    $this->load->view('templates/footer');
  }
  
}