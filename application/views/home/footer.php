<?php $template = "http://localhost/template"; ?>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $template.'/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<!-- DataTables -->
<script src="<?php echo $template.'/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo $template.'/assets/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo $template.'/assets/dist/js/adminlte.min.js'; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo $template.'/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'; ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo $template.'/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'; ?>"></script>
<script src="<?php echo $template.'/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'; ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo $template.'/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- ChartJS -->
<script src="<?php echo $template.'/assets/bower_components/chart.js/Chart.js'; ?>"></script>
<script src="<?php echo $template.'/assets/dist/js/demo.js'; ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo $template.'/assets/js/raphael.min.js'; ?>"></script>
<script src="<?php echo $template.'/assets/js/morris.min.js'; ?>"></script>
<!-- Select2 -->
<script src="<?php echo $template.'/assets/bower_components/select2/dist/js/select2.full.min.js'; ?>"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'pageLength'  : 10
    })
  })

  $("#tombol_tambah").click(function(){
    $('#tambah').modal('show');
  });
</script>

</body>
</html>