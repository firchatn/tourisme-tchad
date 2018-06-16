<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('/assets/plugins/daterangepicker/daterangepicker-bs3.css') ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('/assets/plugins/iCheck/all.css') ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url('/assets/plugins/colorpicker/bootstrap-colorpicker.min.css') ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url('/assets/plugins/timepicker/bootstrap-timepicker.min.css') ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('/assets//plugins/select2/select2.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/adminlte.min.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
    <img src="<?= base_url('/assets/img/AdminLTELogo.png') ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?= base_url('/assets/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item"><a href="<?= site_url('agence/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Agences</p></a></li>
          <li class="nav-item"><a href="<?= site_url('compte/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Comptes</p></a></li>
          <li class="nav-item"><a href="<?= site_url('contact/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Contacts</p></a></li>
          <li class="nav-item"><a href="<?= site_url('hotels/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Hotels</p></a></li>
          <li class="nav-item"><a href="<?= site_url('locationVoitures/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Locations Voitures</p></a></li>
          <li class="nav-item"><a href="<?= site_url('offreVoyages/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Offres Voyage</p></a></li>
          <li class="nav-item"><a href="<?= site_url('siteTouristique/index') ?>" class="nav-link"><i class="nav-icon fa fa-th"></i><p>Sites Touristiques</p></a></li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
