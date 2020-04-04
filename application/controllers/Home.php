<?php
class Home extends CI_Controller{
  function __construct(){
    parent::__construct();
    /** MENGAKSES HOME HARGA */
    $this->load->model('home_model');
    $this->load->model('dashboard_model');
  }

  /** ----------------------------------------------------------- */
  function Index(){
    $ambildata['produk'] = $this->dashboard_model->tampil_produk();
    $this->load->view('home/header');
    $this->load->view('home/body', $ambildata);
    $this->load->view('home/footer');
  }

}