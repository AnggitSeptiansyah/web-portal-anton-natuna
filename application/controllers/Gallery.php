<?php

class Gallery extends CI_Controller {
  public function index(){

    $data['meta_description'] = "CV. Anton Natuna meruapakan digital printing, sehingga perusahaan kami menerima pembuatan design, berikut portfolio design dan mesin. ";
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('design/index');
    $this->load->view('templates/footer');
  }
}