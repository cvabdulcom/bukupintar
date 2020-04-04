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
            <!-- /.messages-menu -->
            <li class="dropdown user user-menu active">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <img src="https://app.portalindo.net/assets/dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Gelora Group</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>