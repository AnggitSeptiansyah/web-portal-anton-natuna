<?php

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();
    is_logged_in();
  }

  public function index(){

    $data['judul'] = "Dashboard";

    $this->load->view('templates/admin_header');
    $this->load->view('templates/admin_sidebar');
    $this->load->view('templates/admin_topbar');
    $this->load->view('dashboard/index');
    $this->load->view('templates/admin_footer');
  }

}