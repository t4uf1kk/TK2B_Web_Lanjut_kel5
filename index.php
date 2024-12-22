<?php
session_start();
if (empty($_SESSION['user'])) {
  header('location:../login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=mhs" class="nav-link">Mahasiswa</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=prodi" class="nav-link">Prodi</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=dosen" class="nav-link">Dosen</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=kategori" class="nav-link">Kategori</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?p=berita" class="nav-link">Berita</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <!-- ... (keep the existing dropdown menus) ... -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="rudihartono.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Taufik Kurrahman</a>
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
        <nav class="mt-2 mb-3" >
          <ul class="nav nav-pills nav-sidebar flex-column mb-3" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php?p=home" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
             
            </li>
            <li class="nav-item">
              <a href="index.php?p=mhs" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Mahasiswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?p=prodi" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Prodi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?p=dosen" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?p=kategori" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?p=berita" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Berita
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?p=ruangan" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Ruangan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../index.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
                <p>
                  LogOut
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
           
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="container">
                    <div class="container">
                      <?php
                      $page = isset($_GET['p']) ? $_GET['p'] : 'home';
                      if ($page == 'home') include 'home.php';
                      if ($page == 'mhs') include 'mahasiswa.php';
                      if ($page == 'prodi') include 'prodi.php';
                      if ($page == 'dosen') include 'dosen.php';
                      if ($page == 'kategori') include 'kategori.php';
                      if ($page == 'berita') include 'berita.php';
                      if ($page == 'ruangan') include 'ruangan.php';
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.content-wrapper -->

      <!-- REQUIRED SCRIPTS -->

      <!-- jQuery -->
      <script src="../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE -->
      <script src="../dist/js/adminlte.js"></script>

      <!-- OPTIONAL SCRIPTS -->
      <script src="../plugins/chart.js/Chart.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="../dist/js/pages/dashboard3.js"></script>
</body>

</html>