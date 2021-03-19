<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->api = "http://localhost/iki/web/tugas/ci/";
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }
  function index()
  {
    $mahasiswa = json_decode($this->curl->simple_get($this->api), true);
    $data = [
      "judul" => "Mahasiswa",
      "mahasiswa" => $mahasiswa
    ];
    $data['mahasiswa'] = json_decode($this->curl->simple_get($this->api), true);
    $this->load->view('mahasiswa/index', $data);
  }

  // insert data mahasiswa
  function add()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'nim'       =>  $this->input->post('nim'),
        'nama'      =>  $this->input->post('nama'),
        'prodi'     =>  $this->input->post('prodi'),
      );
      $insert = $this->curl->simple_post($this->api, $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($insert) {
        $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
      } else {
        $this->session->set_flashdata('hasil', 'Insert Data Gagal');
      }
      redirect('mahasiswa/index');
    } else {
      $data['mahasiswa'] = json_decode($this->curl->simple_get($this->api), true);
      $this->load->view('mahasiswa/add', $data);
    }
  }
  // edit data mahasiswa
  function edit($id = null)
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'nim'       =>  $this->input->post('nim'),
        'nama'      =>  $this->input->post('nama'),
        'prodi'    =>  $this->input->post('prodi'),
        'id' => $this->input->post('nim')
      );
      $update =  $this->curl->simple_put($this->api, $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($update) {
        $this->session->set_flashdata('hasil', 'Update Data Berhasil');
      } else {
        $this->session->set_flashdata('hasil', 'Update Data Gagal');
      }
      redirect('mahasiswa');
    } else {
      $params = array('nim' =>  $this->uri->segment(3));
      $data['mahasiswa'] = json_decode($this->curl->simple_get($this->api . "?id=" . $id), true);
      $this->load->view('mahasiswa/edit', $data);
    }
  }

  // delete data mahasiswa
  function delete($nim)
  {
    if (empty($nim)) {
      redirect('mahasiswa');
    } else {
      $delete =  $this->curl->simple_delete($this->api, array('id' => $nim), array(CURLOPT_BUFFERSIZE => 10));
      if ($delete) {
        $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
      } else {
        $this->session->set_flashdata('hasil', 'Delete Data Gagal');
      }
      redirect('mahasiswa');
    }
  }
}
