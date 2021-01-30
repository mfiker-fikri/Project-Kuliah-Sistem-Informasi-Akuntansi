  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Laporan</a>
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
            <a href="<?php echo base_url() ?>index.php/user/dashboard/logout"   class="dropdown-item"><i class="ni ni-user-run"></i>
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
      <!-- <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
               
        </div>
      </div> -->
      <div class="row mt-5">
        <div class="col mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <!-- <div class="row align-items-center"> -->
                <div class="col" style="margin-bottom: 20px">
                  <h3 class="mb-0">Laporan</h3>
                </div>
              <!-- </div> -->
             
              <!-- Projects table -->
            <table id="myTable" class="table table-striped table-boarder" width="100%" align="center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bulan Dan Tahun</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $i=0;
                    foreach($listJurnal as $row):
                    $i++;
                    $bulan = date('m',strtotime($row->tgl_transaksi));
                    $tahun = date('Y',strtotime($row->tgl_transaksi));
                  ?>
                  <tr>
                    <td scope="col"><?=$i?></td>
                    <td scope="col"><?= bulan($bulan).' '.$tahun ?></td>
                    <td scope="col">
                        <?= form_open('user/Laporan/laporanCetak','',['bulan'=>$bulan,'tahun'=>$tahun]) ?>
                        <?= form_button(['type'=>'submit','content'=>'Cetak Laporan','class'=>'btn btn-success mr-3']) ?>
                        <?= form_close() ?>
                    </td>
                  </tr>
                  <?php
                    endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>