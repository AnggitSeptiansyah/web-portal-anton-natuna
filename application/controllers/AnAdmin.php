<?php

class AnAdmin extends CI_Controller {

  
  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
  }

  public function index(){
    $this->load->library('form_validation');

    $data['judul'] = 'Login Admin';

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if($this->form_validation->run() == false){
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/index', $data);
      $this->load->view('templates/auth_footer');
    }
    else {
      $this->_Login();
    }
  }

  public function _Login(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('admin', ['email' => $email])->row_array();

    if($user){
      if(password_verify($password, $user['password'])){
        $data = [
          'email' => $user['email'],
          'id_jenis_admin' => $user['id_jenis_admin'],
          'username' => $user['username'],
        ];
        $this->session->set_userdata($data);
        redirect('dashboard');
      } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang Anda Masukkan Salah</div>');
          redirect('AnAdmin');
      }
    }
    else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email yang anda masukkan tidak di register</div>');
      redirect('AnAdmin');
    } 
  }

  public function logout(){
    
    is_logged_in();

    $this->session->unset_userdata('email');
    $this->session->unset_userdata('id_jenis_admin');
    $this->session->unset_userdata('username');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah Logut</div>');
    redirect('AnAdmin'); 
  }


  public function list_admin(){

    is_logged_in();
    
    $data['judul'] = "Daftar Admin";
    $data['list_admin'] = $this->admin->getAllAdmin();

    $this->load->view('templates/admin_header', $data);
    $this->load->view('templates/admin_sidebar');
    $this->load->view('templates/admin_topbar');
    $this->load->view('auth/list_admin', $data);
    $this->load->view('templates/admin_footer');
  }

  public function tambah_admin(){

    is_logged_in();

    $this->load->library('form_validation');
    
    $data['judul'] = "Register Admin";

    $data['jenis_admin'] = $this->db->get("jenis_admin")->result();

    $this->form_validation->set_rules('email', 'Email' ,'required|trim');
    $this->form_validation->set_rules('username', 'Username' ,'required|trim');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[6]|matches[password1]');

    if($this->form_validation->run() == false){
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar');
      $this->load->view('templates/admin_topbar');
      $this->load->view('auth/tambah_admin');
      $this->load->view('templates/admin_footer');
    } else {
      $this->admin->tambahAdmin();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('AnAdmin/list_admin');
    }
  }

  public function tambah_jenis_admin(){

    is_logged_in();

    $this->load->library('form_validation');
    
    $data['judul'] = "Tambah Jenis Admin";

    $this->form_validation->set_rules('jenis_admin', 'Jenis Admin', 'required|trim');


    if($this->form_validation->run() == false){
      $this->load->view('templates/admin_header', $data);
      $this->load->view('templates/admin_sidebar');
      $this->load->view('templates/admin_topbar');
      $this->load->view('auth/tambah_jenis_admin');
      $this->load->view('templates/admin_footer');
    } else {
      $this->admin->tambahJenisAdmin();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
      redirect('AnAdmin/list_admin');
    }
    

  }

  

  

}