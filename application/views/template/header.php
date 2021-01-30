<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AKUNTIR</title>
  <!-- Favicon -->
  <link href="<?= base_url('asset/images/brand/Logo_akuntir.png') ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <!-- Icons -->
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    
  <link href="<?= base_url('asset/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet">
  <link href="<?= base_url('asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">

  <link  href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" rel="stylesheet" type="text/css">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url('asset/css/argon.css?v=1.0.0') ?>" rel="stylesheet">
 



   <link rel="stylesheet" href="<?= base_url('asset/vendor/jquery-ui/jquery-ui.min.css'); ?>" />
<script src="<?php echo base_url('asset/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
  <script>
function select_data($akun_id,$no_akun,$nama_akun,$keterangan_akun){
$("#akun_id").val($akun_id);
$("#no_akun").val($no_akun);
$("#nama_akun").val($nama_akun);
$("#keterangan_akun").val($keterangan_akun);

}

function refresh(){
    $("#akun_id").val("");
$("#no_akun").val("");
$("#nama_akun").val("");
$("#keterangan_akun").val("");
 

}
</script>

</head>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="<?= base_url('asset/images/brand/Logo_akuntir.png') ?>" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?= base_url('asset/images/theme/team-4-800x800.jpg') ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?= base_url('logout') ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?= base_url('asset/images/brand/blue.png') ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/dashboard') ?>">
            <i class="fas fa-chart-pie text-primary"></i>  Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/transaksi') ?>">
            <i class="<i fas fa-hand-holding-usd text-green"  ></i> Transaksi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/data_akun') ?>">
            <i class="<i far fa-credit-card text-red"></i> Data Akun
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/jurnal_umum') ?>">
            <i class="ni ni-single-copy-04 text-blue"></i> Jurnal Umum
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/buku_besar') ?>">
            <i class="ni ni-collection text-red"></i> Buku Besar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/neraca_saldo') ?>">
            <i class="<i<i fas fa-balance-scale text-yellow"></i> Neraca Saldo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/laporan') ?>">
            <i class="<i fas fa-file-invoice-dollar text-purple"></i>Laporan
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
