<?php
class Login_model extends CI_Model{

  //fungsi validasi email dan pass login
  function validate($email,$password){
    $this->db->where('username',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('tbl_pengguna',1);
    return $result;
  }

  /** Registrasi */
  function cek_nik(){
  	$nik = $this->input->get('nik');
  	$hasil = $this->db->query("SELECT * FROM tbl_pelamar WHERE nik='$nik'");
  	if($hasil->num_rows() > 0){
  		$data = "tidak";
  	}else{
  		$data = "ya";
  	}
  	return $data;
  }

  function reg(){
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $tanggal = date('Y-m-d');

    $hasil = $this->db->query("INSERT INTO tbl_pelamar(nik, nama, email, password, status_pelamar, status_jadwal, status_psikotest, status_interview, status_diterima, tanggal_register) VALUES('$nik','$nama','$email','$password','TIDAK','TIDAK','TIDAK','TIDAK','TIDAK','$tanggal')");
    return $hasil;

  }
  /** Registrasi */

  /** Login Pelamar */
  function validate_in($nik,$password){
    $this->db->where('nik',$nik);
    $this->db->where('password',$password);
    $result = $this->db->get('tbl_pelamar',1);
    return $result;
  }
  /** Login Pelamar */

}