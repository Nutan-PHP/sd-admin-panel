<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sneaker District</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{!! URL::to("plugins/fontawesome-free/css/all.min.css") !!}'>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href='{!! URL::to("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") !!}'>
  <!-- iCheck -->
  <link rel="stylesheet" href='{!! URL::to("plugins/icheck-bootstrap/icheck-bootstrap.min.css") !!}'>
  <!-- JQVMap -->
  <link rel="stylesheet" href='{!! URL::to("plugins/jqvmap/jqvmap.min.css") !!}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{!! URL::to("css/admin/adminlte.min.css") !!}'>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href='{!! URL::to("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") !!}'>
  <!-- Daterange picker -->
  <link rel="stylesheet" href='{!! URL::to("plugins/daterangepicker/daterangepicker.css") !!}'>
  <!-- summernote -->
  <link rel="stylesheet" href='{!! URL::to("plugins/summernote/summernote-bs4.css") !!}'>
  <link rel="stylesheet" href='{!! URL::to("css/layout.css") !!}'>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.admin.header');
    @include('layouts.admin.sidebar');
    @yield('content');
    @include('layouts.admin.footer');
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src='{!! URL::to("plugins/jquery/jquery.min.js") !!}'></script>
<!-- jQuery UI 1.11.4 -->
<script src='{!! URL::to("plugins/jquery-ui/jquery-ui.min.js") !!}'></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src='{!! URL::to("plugins/bootstrap/js/bootstrap.bundle.min.js") !!}'></script>
<!-- ChartJS -->
<script src='{!! URL::to("plugins/chart.js/Chart.min.js") !!}'></script>
<!-- Sparkline -->
<script src='{!! URL::to("plugins/sparklines/sparkline.js") !!}'></script>
<!-- JQVMap -->
<script src='{!! URL::to("plugins/jqvmap/jquery.vmap.min.js") !!}'></script>
<script src='{!! URL::to("plugins/jqvmap/maps/jquery.vmap.usa.js") !!}'></script>
<!-- jQuery Knob Chart -->
<script src='{!! URL::to("plugins/jquery-knob/jquery.knob.min.js") !!}'></script>
<!-- daterangepicker -->
<script src='{!! URL::to("plugins/moment/moment.min.js") !!}'></script>
<script src='{!! URL::to("plugins/daterangepicker/daterangepicker.js") !!}'></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src='{!! URL::to("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") !!}'></script>
<!-- Summernote -->
<script src='{!! URL::to("plugins/summernote/summernote-bs4.min.js") !!}'></script>
<!-- overlayScrollbars -->
<script src='{!! URL::to("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") !!}'></script>
<!-- AdminLTE App -->
<script src='{!! URL::to("js/admin/adminlte.js") !!}'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{!! URL::to("js/admin/pages/dashboard.js") !!}'></script>
<!-- AdminLTE for demo purposes -->
<script src='{!! URL::to("js/admin/demo.js") !!}'></script>
{{-- Custom Js --}}
<script src='{!! URL::to("js/admin/adminScript.js") !!}'></script>
</body>
</html>
