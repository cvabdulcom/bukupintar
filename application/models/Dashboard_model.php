<?php
class Dashboard_model extends CI_Model{

  /** Tampil produk */
  function tampil_produk(){
    $hasil = $this->db->query("SELECT * FROM tbl_produk");
    return $hasil;
  }
  /** Tampil produk */

  /** Simpan Produk */
  function tambah_produk($nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan, $foto){
    $tanggal = date('Y-m-d');
    $hasil = $this->db->query("INSERT INTO tbl_produk(nama_resmi, tanggal, jenis, isi_per_pcs, isi_kemasan, kode_pabrik, nama_alias, keterangan, gambar, part_number, mat_group) VALUES ('$nama_resmi','$tanggal','$jenis','$isi_per_pcs','$isi_kemasan','$kode_pabrik','$nama_alias','$keterangan','$foto','$part_number','$mat_group')");
    return $hasil;
  }
  /** Simpan Produk */

  /** Ubah produk */
  function Ubah_produk_foto($id, $nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan, $foto){
    $hasil = $this->db->query("UPDATE tbl_produk SET nama_resmi='$nama_resmi', jenis='$jenis', isi_per_pcs='$isi_per_pcs', isi_kemasan='$isi_kemasan', kode_pabrik='$kode_pabrik', nama_alias='$nama_alias', part_number='$part_number', mat_group='$mat_group', keterangan='$keterangan', gambar='$foto' WHERE id='$id'");
    return $hasil;
  }

  function Ubah_produk($id, $nama_resmi, $jenis, $isi_per_pcs, $isi_kemasan, $kode_pabrik, $nama_alias, $part_number, $mat_group, $keterangan){
    $hasil = $this->db->query("UPDATE tbl_produk SET nama_resmi='$nama_resmi', jenis='$jenis', isi_per_pcs='$isi_per_pcs', isi_kemasan='$isi_kemasan', kode_pabrik='$kode_pabrik', nama_alias='$nama_alias', part_number='$part_number', mat_group='$mat_group', keterangan='$keterangan' WHERE id='$id'");
    return $hasil;
  }
  /** Ubah produk */

  /** Hapus produk */
  function hapus_produk(){
    $id = $this->input->post('id_hapus');
    $hasil = $this->db->query("DELETE FROM tbl_produk WHERE id='$id'");
    return $hasil;
  }
  /** Hapus produk */

}