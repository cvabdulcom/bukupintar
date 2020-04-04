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
                  <th width="10"></th>
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
                    $gambar = $tampil['gambar'];
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
                  <td>
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