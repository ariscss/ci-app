<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getAllMahasiswa()
  {
    return $this->db->get('mahasiswa')->result_array();
  }
  // ------------------------------------------------------------------------

  public function tambahDataMahasiswa()
  {
    $data = [
        "nama" => $this->input->post('nama', true),
        "nim" => $this->input->post('nim', true),
        "email" => $this->input->post('email', true),
        "jurusan" => $this->input->post('jurusan', true)
    ];

    $this->db->insert('mahasiswa', $data);
  }

  public function hapusDataMahasiswa($id)
  {
    // $this->db->where('id', $id);
    $this->db->delete('mahasiswa', ['id' => $id]);
  }

  public function getMahasiswaById  ($id)
  {
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }

  public function ubahDataMahasiswa()
  {
    $data = [
        "nama" => $this->input->post('nama', true),
        "nim" => $this->input->post('nim', true),
        "email" => $this->input->post('email', true),
        "jurusan" => $this->input->post('jurusan', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('mahasiswa', $data);
  }

  public function cariDataMahasiswa()
  {
    $keyword = $this->input->post('keyword', TRUE);
    $this->db->like('nama', $keyword);
    $this->db->or_like('jurusan', $keyword);
    $this->db->or_like('nim', $keyword);
    return $this->db->get('mahasiswa')->result_array();
  }
}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */