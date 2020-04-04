<?php $template = "http://localhost/template"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator | BUKU PINTAR</title>
  <link rel="shortcut icon" href="https://www.geloragroup.com/assets/images/favicon.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/css/jquery-ui.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/Ionicons/css/ionicons.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/jvectormap/jquery-jvectormap.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/select2/dist/css/select2.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/dist/css/AdminLTE.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo $template.'/assets/dist/css/skins/_all-skins.min.css'; ?>">
  
  
  <link rel="stylesheet" href="<?php echo $template.'/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="<?php echo $template.'/assets/sweetalert/sweetalert.min.js'; ?>"></script>
  <link rel="stylesheet" href="<?php echo $template.'/assets/sweetalert/sweetalert.min.css'; ?>"/>

  <script src="<?php echo $template.'/assets/bower_components/jquery/dist/jquery.min.js'; ?>"></script>
  <script src="<?php echo $template.'/assets/js/jquery-ui.js'; ?>"></script>

  <!-- DataTables -->
  <script src="<?php echo $template.'/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
  <script src="<?php echo $template.'/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>

  <!-- Google Drive -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $template.'/assets/googledrive/upload.css'; ?>" />
  <script src="<?php echo $template.'/assets/googledrive/main.js'; ?>"></script>
  <script src="<?php echo $template.'/assets/googledrive/upload.js'; ?>"></script>
  <!-- Google Drive -->

  <!-- Date Range -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Date Range -->
</head>
<body class="sidebar-mini skin-black-light sidebar-mini layout-top-nav fixed">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">BUKU<b>PINTAR</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" id="tombol_tambah">
                <i class="fa fa-plus"></i>
              </a>
            </li>
            <!-- /.messages-menu -->
            <li class="dropdown user user-menu active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="https://app.portalindo.net/assets/dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Maya</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="https://app.portalindo.net/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p>
                    Maya                    
                    <small>Manager</small>
                  </p>
                </li>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('/login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <div class="modal fade" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Produk</h4>
        </div>
        <div class="modal-body">
        <div class="box-body">
          <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('dashboard/tambah_produk'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Resmi</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_resmi" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis</label>
                  <div class="col-sm-9">
                    <select name="jenis" class="form-control" required="">
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
                    <input type="text" name="isi_per_pcs" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Isi Kemasan</label>
                  <div class="col-sm-9">
                    <input type="number" name="isi_kemasan" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Pabrik</label>
                  <div class="col-sm-9">
                    <input type="text" name="kode_pabrik" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Alias</label>
                  <div class="col-sm-9">
                    <textarea name="nama_alias" class="form-control" placeholder="Lebih dari satu dengan koma (,)" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Part Number</label>
                  <div class="col-sm-9">
                    <input type="text" name="part_number" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mat Group</label>
                  <div class="col-sm-9">
                    <input type="text" name="mat_group" class="form-control" placeholder="-" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" placeholder="-" required=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Gambar</label>
                  <div class="col-sm-9">
                    <input type="file" name="foto" class="form-control" required="">
                    <p class="help-block">Ukuran maksimal 500 KB (JPEG, JPG, PNG)</p>
                  </div>
                </div>
              </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="button_submit"><div id="Loading">Save</div></button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
