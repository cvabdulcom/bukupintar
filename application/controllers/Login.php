<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    //menjalankan model login, untuk menampilkan database
    $this->load->model('login_model');
  }

  //ketika sistem di akses akan menampilkan tampilan view login
  function index(){
    if($this->session->userdata('logged_in_karir') !== TRUE){ //jika gagal login
      $this->load->view('login_view');
    }else{ //jika berhasil login
      redirect('dashboard');
    }
  }

  //ketika melakukan login akan dicek
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    // $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){

      $data  = $validate->row_array();

      $id_pengguna_karir = $data['id_pengguna'];
      $level_karir = $data['level'];
      $lokasi_karir = $data['lokasi'];
      $nama_karir = $data['nama'];
      $password_karir = $data['password'];
      $username_karir = $data['username'];

      $sesdata = array(
        'id_pengguna_karir' => $id_pengguna_karir,
        'level_karir'       => $level_karir,
        'lokasi_karir'      => $lokasi_karir,
        'nama_karir'        => $nama_karir,
        'password_karir'    => $password_karir,
        'username_karir'    => $username_karir,
        'logged_in_karir'   => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('dashboard');
    }else{ //jika user pass salah maka akan muncul notif
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
  }

  //funcsi untuk logout ketika klik link logout
  function logout(){
    $this->session->sess_destroy();
    redirect('/');
  }

  /** Register */
  function Cek_nik(){
    $data = $this->login_model->cek_nik();
    echo json_encode($data);
  }

  function Reg(){
    $data = $this->login_model->reg();
    echo json_encode($data);
  }
  /** Register */

  /** Login Pelamar */
  function in(){
    $nik    = $this->input->post('nik',TRUE);
    $password = md5($this->input->post('password',TRUE));
    // $password = password_hash($this->input->post('password',TRUE), PASSWORD_BCRYPT);
    $validate = $this->login_model->validate_in($nik,$password);
    if($validate->num_rows() > 0){

      $data  = $validate->row_array();

      $id_pelamar_karir = $data['id_pelamar'];
      $level_karir = "4";
      $lokasi_karir = $data['lokasi'];
      $nama_karir = $data['nama'];
      $password_karir = $data['password'];
      $nik_karir = $data['nik'];
      $status_pelamar = $data['status_pelamar'];
      $tanggal_register = $data['tanggal_register'];
      $tanggal_tes = $data['tanggal_tes'];

      $sesdata = array(
        'id_pelamar_karir'  => $id_pelamar_karir,
        'level_karir'       => $level_karir,
        'lokasi_karir'      => $lokasi_karir,
        'nama_karir'        => $nama_karir,
        'password_karir'    => $password_karir,
        'nik_karir'         => $nik_karir,
        'status_pelamar'    => $status_pelamar,
        'tanggal_register'  => $tanggal_register,
        'tanggal_tes'       => $tanggal_tes,
        'logged_in_karir'   => TRUE
      );
      $this->session->set_userdata($sesdata);
      echo json_encode('ya');
    }else{ //jika user pass salah maka akan muncul notif
      echo json_encode('tidak');
    }
  }
  /** Login Pelamar */

}