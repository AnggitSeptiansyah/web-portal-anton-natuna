<?php

class Profile extends CI_Controller {
  
  public function index(){

    $data['meta_description'] = "CV. Anton Natuna merupakan perusahaan yang bergerak dibidang percetakan. CV. Anton Natuna bergerak dibidang design, printing, finishing, dan packaging";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('profile/index');
    $this->load->view('templates/footer');
  }
  
}