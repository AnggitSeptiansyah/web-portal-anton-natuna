<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_produk_model extends CI_Model {

  public function getAllProduct($keyword = null){

    

    if( $keyword ){
      $this->db->like('nama_produk', $keyword);
      $this->db->or_like('nama_jenis', $keyword);
    }

    $this->db->select("produk.*, jenis_product.nama_jenis");
    $this->db->join("jenis_product", "jenis_product.id = produk.id_jenis_produk");
    $query = $this->db->get("produk");
    return $query->result();
  }

  public function tambahProduk(){
    $nama_produk = $this->input->post('nama_produk');
    $jenis_produk = $this->input->post('id_jenis_produk');
    $caption = $this->input->post('caption');
    $upload_image = $_FILES['gambar']['name'];

    if($upload_image){
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = '1024';
      $config['upload_path'] = './assets/img/produk/';


      $this->load->library('upload', $config);

      if($this->upload->do_upload('gambar')){
        $new_image = $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    }

    $data = [
      'id_jenis_produk' => $jenis_produk,
      'nama_produk' => $nama_produk,
      'caption' => $caption,
      'gambar' => $new_image
    ];

    $this->db->insert('produk', $data);
  }

  public function deleteProduk($id){
    $this->db->where('id', $id);
    $this->db->delete('produk');
  }

}