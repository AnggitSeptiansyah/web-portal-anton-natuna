<?php

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Home_model', 'home');
  }

  public function index(){

    $data['meta_description'] = "CV. Anton Natuna adalah sebuah perusahaan yang bergerak dibidang Digital Printing, sehingga menyediakan jasa pembuatan design, spanduk, banner, x-banner, t-banner, brosur, poster dan juga printing, finishing dan packaging";

    $data['jenis_product'] = $this->home->getAllJenisProduct();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('templates/carousel');
    $this->load->view('home/index');
    $this->load->view('templates/footer');
  }

}

?>

