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
  <!-- Icons -->
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    
  <link href="<?= base_url('asset/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet">
  <link href="<?= base_url('asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url('asset/css/argon.css?v=1.0.0') ?>" rel="stylesheet">

   <link rel="stylesheet" href="<?= base_url('asset/vendor/jquery-ui/jquery-ui.min.css'); ?>" />
<script src="<?php echo base_url('asset/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>


   
  <script>
function select_data_pembelian($transaksi_id,$nama_transaksi,$tgl_transaksi,$nominal_transaksi,$keterangan){
$("#transaksi_id").val($transaksi_id);
$("#nama_transaksi").val($nama_transaksi);
$("#tgl_transaksi").val($tgl_transaksi);
$("#nominal_transaksi").val($nominal_transaksi);
$("#keterangan").val($keterangan); 
}

function refresh(){
    $("#transaksi_id").val("");
$("#nama_transaksi").val("");
$("#tgl_transaksi").val("");
$("#nominal_transaksi").val("");
$("#keterangan").val(""); 

}
</script>


<script>
function select_data_penjualan($penjualan_id,$nama_transaksi,$tgl_transaksi,$nominal_transaksi,$keterangan){
$("#penjualan_id").val($penjualan_id);
$("#nama_transaksi").val($nama_transaksi);
$("#tgl_transaksi").val($tgl_transaksi);
$("#nominal_transaksi").val($nominal_transaksi);
$("#keterangan").val($keterangan); 
}

function refresh(){
    $("#penjualan_id").val("");
$("#nama_transaksi").val("");
$("#tgl_transaksi").val("");
$("#nominal_transaksi").val("");
$("#keterangan").val(""); 

}
</script>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}


</style>
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
               
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('kasir/dashboard') ?>">
            <i class="fas fa-chart-pie text-primary"></i>  Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('kasir/transaksi') ?>">
            <i class="fas fa-coins text-primary"  ></i> Pembelian
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('kasir/penjualan') ?>">
            <i class="fas fa-coins text-primary"  ></i> Penjualan
            </a>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>

  
