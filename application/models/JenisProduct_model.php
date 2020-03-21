<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JenisProduct_model extends CI_Model {

  public function getAllJenisProduct(){
    $this->db->select("id, nama_jenis, caption, gambar");
    $query = $this->db->get("jenis_product");
    return $query->result();
  }


  public function tambahJenisProduct(){
    $nama_jenis_product = $this->input->post('nama_jenis');
    $caption = $this->input->post('caption');
    $upload_image = $_FILES['gambar']['name'];

    if($upload_image){
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = '1024';
      $config['upload_path'] = './assets/img/jenis_product/';

      $this->load->library('upload', $config);

      if($this->upload->do_upload('gambar')){
        $new_image = $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    }

    $data = [
      'nama_jenis' => $nama_jenis_product,
      'gambar' => $new_image,
      'caption' => $caption
    ];

    $this->db->insert('jenis_product', $data);
  }

  public function deleteJenisProduct($id){
    $this->db->where('id', $id);
    $this->db->delete('jenis_product');
  }

  public function updateJenisProduct(){
    $nama_jenis_product = $this->input->post('nama_jenis');
    $caption = $this->input->post('caption');
    $upload_image = $_FILES['img']['name'];

    if($upload_image){
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = '1024';
      $config['upload_path'] = './assets/img/jenis_product/';


      $this->load->library('upload', $config);

      if($this->upload->do_upload('img')){
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
      } else {
        echo $this->upload->display_errors();
      }
    }

    $this->db->where('id', $this->input->post('id'));
    $this->db->set('nama_jenis', $nama_jenis_product);
    $this->db->set('caption', $caption);
    $this->db->update('jenis_product');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil mengubah data</div>');
    redirect('jenisproduct');
  }

}