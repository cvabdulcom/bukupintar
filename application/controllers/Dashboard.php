<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    //cek session apakah sudah login, jika belum maka ke halaman login
    if($this->session->userdata('logged_in_karir') !== TRUE){
      redirect('/');
    }
    /** MENGAKSES MODEL HARGA */
    $this->load->model('dashboard_model');
  }

  /** ------------------------------------------------------------------ */
  function Index(){
    if($this->session->userdata('level_karir')==='1'){
      $ambildata['produk'] = $this->dashboard_model->tampil_produk();
      $this->load->view('admin/header');
      $this->load->view('admin/dashboard', $ambildata);
      $this->load->view('admin/footer');
    }else{ 
      echo "Access Denied";
    }
  }
  /** ------------------------------------------------------------------ */

  /** Fungsi tambah produk */
  function Tambah_produk(){
    
    /** Data gambar */
    $data = array();
    $config['upload_path'] = './assets/foto/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 500;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('foto')) {
      $error = ['error' => $this->upload->display_errors()]; 
      // var_dump($error);
      $link = base_url('dashboard');
      echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data1['foto'] = $fileData['file_name'];
      $foto = $data1['foto'];
      
      $nama_resmi = $this->input->post('nama_resmi');  
      $jenis = $this->input->post('jenis');  
      $isi_per_pcs = $this->input->post('isi_per_pcs');  
      $isi_kemasan = $this->input->post('isi_kemasan');  
      $kode_pabrik = $this->input->post('kode_pabrik');  
      $nama_alias = $this->input->post('nama_alias');  
      $part_number = $this->input->post('part_number');  
      $mat_group = $this->input->post('mat_group');  
      $keterangan = $this->input->post('keterangan');

      $this->dashboard_model->tambah_produk($nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan, $foto);
      redirect('dashboard');
    }
    /** Data gambar */
  }
  /** Fungsi tambah produk */

  /** Fungsi ubah produk */
  function Ubah_produk(){
    if(!isset($_FILES['foto']) || $_FILES['foto']['error'] == UPLOAD_ERR_NO_FILE){
      $id = $this->input->post('id_ubah');  
      $nama_resmi = $this->input->post('nama_resmi_ubah');  
      $jenis = $this->input->post('jenis_ubah');  
      $isi_per_pcs = $this->input->post('isi_per_pcs_ubah');  
      $isi_kemasan = $this->input->post('isi_kemasan_ubah');  
      $kode_pabrik = $this->input->post('kode_pabrik_ubah');  
      $nama_alias = $this->input->post('nama_alias_ubah');  
      $part_number = $this->input->post('part_number_ubah');  
      $mat_group = $this->input->post('mat_group_ubah');  
      $keterangan = $this->input->post('keterangan_ubah');

      $this->dashboard_model->ubah_produk($id, $nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan);
      redirect('dashboard');      
    }else{
      $data = array();
      $config['upload_path'] = './assets/foto/';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = 500;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('foto')) {
        $error = ['error' => $this->upload->display_errors()]; 
        // var_dump($error);
        $link = base_url('dashboard');
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar!\");document.location.href='$link';</script>";
      }else{
        $fileData = $this->upload->data();
        $data1['foto'] = $fileData['file_name'];
        $foto = $data1['foto'];
        
        $id = $this->input->post('id_ubah');  
        $nama_resmi = $this->input->post('nama_resmi_ubah');  
        $jenis = $this->input->post('jenis_ubah');  
        $isi_per_pcs = $this->input->post('isi_per_pcs_ubah');  
        $isi_kemasan = $this->input->post('isi_kemasan_ubah');  
        $kode_pabrik = $this->input->post('kode_pabrik_ubah');  
        $nama_alias = $this->input->post('nama_alias_ubah');  
        $part_number = $this->input->post('part_number_ubah');  
        $mat_group = $this->input->post('mat_group_ubah');  
        $keterangan = $this->input->post('keterangan_ubah');

        $this->dashboard_model->ubah_produk_foto($id, $nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan, $foto);
        redirect('dashboard');
      }
    }
  }
  /** Fungsi ubah produk */

  /** Hapus produk */
  function Hapus_produk(){
    $this->dashboard_model->hapus_produk();
    redirect('dashboard');
  }
  /** Hapus produk */

}