<?php

class Contact extends CI_Controller {
  
  public function index(){

    $data['meta_description'] = "CV. Anton Natuna merupakan perusahaan digital printing yang sudah bergerak selama 10 tahun. Oleh kerana itu CV. Anton Natuna memiliki beberapa cabang, diantaranya Surabaya sebagai kantor pusat, Arengka, Kepri dan Teratai merupkaan kantor cabang";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('contact/index');
    $this->load->view('templates/footer');
  }
  
}