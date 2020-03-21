<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function getAllAdmin(){
    $this->db->select("admin.email, admin.username, jenis_admin.nama_jenis");
    $this->db->join("jenis_admin", "jenis_admin.id = admin.id_jenis_admin");
    $query = $this->db->get("admin");
    return $query->result();
  }

  public function tambahJenisAdmin(){
    $dataJenisAdmin = [
      'nama_jenis' => $this->input->post('jenis_admin')
    ];

    $this->db->insert('jenis_admin', $dataJenisAdmin);
  }

  public function tambahAdmin(){
    $data = [
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'id_jenis_admin' => $this->input->post('id_jenis_admin'),
    ];

    $this->db->insert('admin', $data);
  }

}
