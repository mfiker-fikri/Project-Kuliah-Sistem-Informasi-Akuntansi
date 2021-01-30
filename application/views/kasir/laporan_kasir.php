

    <!-- Main content -->
    <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Menu Finance</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= base_url('asset/images/theme/team-4-800x800.jpg') ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata("user_nama") ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?php echo base_url() ?>index.php/kasir/dashboard/logout"   class="dropdown-item"><i class="ni ni-user-run"></i>
            <span>Logout</span></a>  
            <!-- <a href="<?= base_url('logout') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a> -->
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">    
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
               
        </div>
      </div>
      <div class="row mt-5">
        <div class="col mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Laporan Transaksi</h3>
                </div>
                <!-- <div class="col-12 my-3">
                  <a href="<?= base_url('data_akun/tambah') ?>" class="btn btn-primary mt-2">Tambah Transaksi</a>
                </div> -->
                <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Bulan dan Tahun</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>November 2019</td>
      <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-print"> Cetak Laporan</i></button></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Desember 2019</td>
      
      <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-print"> Cetak Laporan</i></button></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Januari 2020</td>
      
      <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-print"> Cetak Laporan</i></button></td>
      
    </tr>
  </tbody>
</table>
              
              </div>
            </div>
           
          </div>
        </div>
      </div>


      <!-- <div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                ADMINISTRATOR
              </a>
              <a href="dashboard.php" class="list-group-item"><i class="fa fa-dashboard"></i> Dashboard</a>
              <a href="#" class="list-group-item"><i class="fa fa-book"></i> Blog</a>
              <a href="#" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
              <a href="#" class="list-group-item"><i class="fa fa-comments-o"></i> Komentar</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
              <div class="panel-body">
                Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman Administrator System
              </div>
            </div>
        </div>
    </div>
</div> -->
<!-- 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <!-- Argon Scripts -->
  <!-- Core -->
 
   

</body>
</html>