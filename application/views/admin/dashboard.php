<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="20">No</th>
                  <th>Nama Resmi</th>
                  <th>Jenis</th>
                  <th>Isi</th>
                  <th>Kemasan</th>
                  <th>Kode Pabrik</th>
                  <th>Part Number</th>
                  <th>Mat Group</th>
                  <th>Keterangan</th>
                  <th>Nama Alias</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($produk->result_array() as $tampil):
                    $no++;
                    $id = $tampil['id'];
                    $nama_resmi = $tampil['nama_resmi'];
                    $tanggal = $tampil['tanggal'];
                    $jenis = $tampil['jenis'];
                    $isi_per_pcs = $tampil['isi_per_pcs'];
                    $isi_kemasan = $tampil['isi_kemasan'];
                    $kode_pabrik = $tampil['kode_pabrik'];
                    $nama_alias = $tampil['nama_alias'];
                    $keterangan = $tampil['keterangan'];
                    $gambar = $tampil['gambar'];
                    $part_number = $tampil['part_number'];
                    $mat_group = $tampil['mat_group'];
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $nama_resmi; ?></td>
                  <td><?php echo $jenis; ?></td>
                  <td><?php echo $isi_per_pcs; ?></td>
                  <td><?php echo $isi_kemasan; ?></td>
                  <td><?php echo $kode_pabrik; ?></td>
                  <td><?php echo $part_number; ?></td>
                  <td><?php echo $mat_group; ?></td>
                  <td><?php echo $keterangan; ?></td>
                  <td><?php echo $nama_alias; ?></td>
                  <td width="10">
                    <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#gambar<?php echo $id; ?>"><i class="fa fa-file"></i></button>
                    <div class="modal fade" id="gambar<?php echo $id; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><?php echo $nama_resmi; ?></h4>
                          </div>
                          <div class="modal-body">
                            <a href="<?php echo base_url('assets/foto/'); echo $gambar; ?>" target="_blank"><img src="<?php echo base_url('assets/foto/'); echo $gambar; ?>" width="100%" height="100%" alt="<?php echo $nama_resmi; ?>"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td width="10">
                    <a href="javascript:;" class="btn btn-xs btn-warning item_ubah" data-id="<?php echo $id; ?>" data-namaresmi="<?php echo $nama_resmi; ?>" data-tanggal="<?php echo $tanggal; ?>" data-jenis="<?php echo $jenis; ?>" data-isi="<?php echo $isi_per_pcs; ?>" data-kemasan="<?php echo $isi_kemasan; ?>" data-kodepabrik="<?php echo $kode_pabrik; ?>" data-namaalias="<?php echo $nama_alias; ?>" data-keterangan="<?php echo $keterangan; ?>" data-gambar="<?php echo $gambar; ?>" data-partnumber="<?php echo $part_number; ?>" data-matgroup="<?php echo $mat_group; ?>">
                      <i class="fa fa-edit"></i>
                    </a>
                  </td>
                  <td width="10">
                    <a href="javascript:;" class="btn btn-xs btn-danger item_hapus" data-id="<?php echo $id; ?>">
                      <i class="fa fa-trash-o"></i>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="ubah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ubah Produk</h4>
      </div>
      <div class="modal-body">
      <div class="box-body">
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/ubah_produk'); ?>" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Resmi</label>
                <div class="col-sm-9">
                  <input type="hidden" name="id_ubah">
                  <input type="text" name="nama_resmi_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Jenis</label>
                <div class="col-sm-9">
                  <select name="jenis_ubah" class="form-control" required="">
                    <option value="">-</option>
                    <option value="Pelumas Botol">Pelumas Botol</option>
                    <option value="Pelumas Drum">Pelumas Drum</option>
                    <option value="Ban Luar">Ban Luar</option>
                    <option value="Ban Dalam">Ban Dalam</option>
                    <option value="Busi">Busi</option>
                    <option value="Aki Motor">Aki Motor</option>
                    <option value="Aki Mobil">Aki Mobil</option>
                    <option value="Vanbelt">Vanbelt</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Isi Perpcs</label>
                <div class="col-sm-9">
                  <input type="text" name="isi_per_pcs_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Isi Kemasan</label>
                <div class="col-sm-9">
                  <input type="number" name="isi_kemasan_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Kode Pabrik</label>
                <div class="col-sm-9">
                  <input type="text" name="kode_pabrik_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Nama Alias</label>
                <div class="col-sm-9">
                  <textarea name="nama_alias_ubah" class="form-control" placeholder="Lebih dari satu dengan koma (,)" required=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Part Number</label>
                <div class="col-sm-9">
                  <input type="text" name="part_number_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Mat Group</label>
                <div class="col-sm-9">
                  <input type="text" name="mat_group_ubah" class="form-control" placeholder="-" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Keterangan</label>
                <div class="col-sm-9">
                  <textarea name="keterangan_ubah" class="form-control" placeholder="-" required=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Gambar</label>
                <div class="col-sm-9">
                  <input type="file" name="foto" class="form-control">
                  <p class="help-block">Ukuran maksimal 500 KB (JPEG, JPG, PNG)</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button_submit_ubah"><div id="Loading_ubah">Save</div></button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Ubah -->

<!-- Modal Hapus -->
<form method="POST" action="<?php echo base_url('dashboard/hapus_produk'); ?>">
  <div class="modal fade bd-example-modal-sm" id="hapus" style="display: none;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          Anda yakin hapus produk ?
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id_hapus" id="id_hapus">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- Modal Hapus -->

<script>
  /* GET_HAPUS_BY_ID START */
  $('.item_hapus').click(function(){
    var id_hapus = $(this).data('id');
    $('#hapus').modal('show');
    $('[name = "id_hapus"]').val(id_hapus);
  });
  /* GET_HAPUS_BY_ID END */

  /* GET_UBAH START */
  $('.item_ubah').click(function(){
    var id_ubah = $(this).data('id');
    var nama_resmi = $(this).data('namaresmi');
    var tanggal = $(this).data('tanggal');
    var jenis = $(this).data('jenis');
    var isi_per_pcs = $(this).data('isi');
    var isi_kemasan = $(this).data('kemasan');
    var kode_pabrik = $(this).data('kodepabrik');
    var nama_alias = $(this).data('namaalias');
    var keterangan = $(this).data('keterangan');
    var gambar = $(this).data('gambar');
    var part_number = $(this).data('partnumber');
    var mat_group = $(this).data('matgroup');
    $('#ubah').modal('show');

    $('[name = "id_ubah"]').val(id_ubah);
    $('[name = "nama_resmi_ubah"]').val(nama_resmi);
    $('[name = "jenis_ubah"]').val(jenis);
    $('[name = "isi_per_pcs_ubah"]').val(isi_per_pcs);
    $('[name = "isi_kemasan_ubah"]').val(isi_kemasan);
    $('[name = "kode_pabrik_ubah"]').val(kode_pabrik);
    $('[name = "nama_alias_ubah"]').val(nama_alias);
    $('[name = "keterangan_ubah"]').val(keterangan);
    $('[name = "part_number_ubah"]').val(part_number);
    $('[name = "mat_group_ubah"]').val(mat_group);
  });
  /* GET_UBAH END */
</script>