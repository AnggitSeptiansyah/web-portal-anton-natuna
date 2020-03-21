<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  public function getAllJenisProduct(){
    $this->db->select("id, nama_jenis, gambar, caption");
    $this->db->limit(12);
    $query = $this->db->get("jenis_product");
    return $query->result();
  }

  public function getDetailJenisProduct($id){
    $this->db->get_where('jenis_product', ['id' => $id])->row();
  }

  public function getDetailProduct($id){
    $this->db->get_where('produk', ['id_jenis_produk' => $id])->result();
  }

}
