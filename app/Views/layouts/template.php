<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title?></title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- <link rel="stylesheet" href="<?= base_url() ?>Assets/backend/plugins/summernote/summernote-bs4.min.css"> -->


  <link href="<?= base_url() ?>Assets/backend/vendors/sweetalert2/sweetalert2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>Assets/backend/vendors/sweetalert2/animate.min.css" rel="stylesheet">

  <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav style="background-color:RGB(40, 178, 170);" class="main-header navbar navbar-expand navbar-light navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" style="color: RGB(245, 245, 245);" class="nav-link"> 
          <?php
            $ses = session()->get('role_id');
           if ($ses == 1) {
               echo 'Admin IT';
          }elseif ($ses == 2) {
            echo 'Admin';
          }else {
            echo 'User';
          }?> Page</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background-color:RGB(40, 178, 170);" class="main-sidebar sidebar-light elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url() ?>Assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image">
        <span style="color: RGB(245, 245, 245); font-style: bold;" class="brand-text font-weight-dark">Tes Codeigniter4</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>Assets/backend/dist/img/default.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a style="color: RGB(245, 245, 245);" href="#" class="d-block">| <i class="fa fa-user"> <?= session()->get('Name')?></i></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <?= $this->include('layouts/navbars')?>
              
            </ul>
          </li>
        </ul>
      </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <script src="<?= base_url() ?>Assets/backend/plugins/jquery/jquery.min.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?= $this->renderSection('content') ?>
      <!-- Main content -->
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.0.0
      </div>
      <strong>Copyright &copy; 2023 <a class="text-info" href="">tes App</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>Assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>Assets/backend/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>Assets/backend/dist/js/demo.js"></script>

  <script src="<?= base_url() ?>Assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- <script src="<?= base_url() ?>Assets/backend/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/pdfmake/vfs_fonts.js"></script> -->
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="<?= base_url() ?>Assets/backend/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>Assets/backend/plugins/summernote/summernote-bs4.min.js"></script>

  <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>
      $(document).ready( function () {
    $('#myTables').DataTable();
} );
</script>

  <!-- Page specific script -->
  

  <script>
    var flash = $('#flash').data('flash');
    if (flash) {
      Swal.fire({
        icon: 'success',
        title: 'success',
        text: flash
      })
    }


    var flasherr = $('#flasherr').data('flasherr');
    if (flasherr) {
      Swal.fire({
        icon: 'info',
        title: 'Gagal',
        text: flasherr
      })
    }


    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data Akan Dihapus!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })


    $(document).on('click', '#btn-keluar', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Akan Logout!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })


    $(document).on('click', '#btn-realisasi', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data Akan Di Realisasi dan akan  di close (Data tidak akan bisa di hapus-edit-tambah)!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Realisasi!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })
  </script>


  

  <script>
    /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
      return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
      return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
  </script>

</body>

</html>