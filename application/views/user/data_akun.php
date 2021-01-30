

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
                  <span class="mb-0 text-sm  font-weight-bold"><?= ucwords($this->session->userdata("user_nama")) ?></span>
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
                <div class="col">
                  <h3 class="mb-0">Akun</h3>
                </div>
              
                <!-- <table class="table" style="margin-top: 50px">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">No Akun</th>
      <th scope="col">Nama Akun</th>
      <th scope="col">Keterangan Akun</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   
  <?php 
  $no = 1;
  foreach ($data_akun as $dakun) :
  ?>
  <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $dakun->no_akun ?></td>
      <td><?php echo $dakun->nama_akun ?></td>
      <td><?php echo $dakun->keterangan_akun ?></td>
      <td style="cursor: pointer;" onClick="select_data(
        '<?=$dakun->akun_id ?>',
        '<?=$dakun->no_akun ?>',
        '<?=$dakun->nama_akun ?>',
        '<?=$dakun->keterangan_akun ?>'
        )" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pen" style="color:blue"></i></td>
      <td><a href="<?php echo base_url("index.php/user/Data_akun/hapus/".$dakun->akun_id)?>"><i class="fa fa-trash"></i></a></td>
      
  
    </tr>
    <?php endforeach ;?>
   
  </tbody>
</table> -->


 <div class="col-12 my-3">
                  <a href="<?= base_url('index.php/user/Data_akun/createAkun') ?>" class="btn btn-primary mt-2">Tambah Akun</a>
                </div>
             
           
              <!-- Projects table -->
             <table id="myTable" class="table table-striped table-boarder" width="100%" align="center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nomor Akun</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Keterangan Akun</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach($dataAkun as $row): 
                  ?>
                  <tr>
                    <td>
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?= $row->no_reff ?>
                    </td>
                    <td>
                    <?= $row->nama_reff ?>
                    </td>
                    <td>
                    <?= $row->keterangan ?>
                    </td>
                    <td class="d-flex justify-content-center">
                        <a href="<?= base_url('index.php/user/Data_akun/editAkun/'.$row->no_reff) ?>" class="btn btn-warning btn-xs fa fa-pen"></a>
                        <?= form_open('user/Data_akun/deleteAkun',['class'=>'form'],['id'=>$row->no_reff]) ?>
                        <?= form_button(['type'=>'submit','content'=>'','class'=>'btn btn-xs btn-danger  fa fa-trash hapus']) ?>
                        <?= form_close() ?>
                    </td>
                  </tr> 
                  <?php endforeach; ?>                 
                </tbody>
              </table>
            </div>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <Form method="POST"  action="<?php echo site_url('user/Data_akun/tambah_akun')?>">
         <div class="form group">
         <input type="hidden" name="akun_id" id="akun_id">
           <label>No Akun</label>
           <input type="number" name="no_akun" id="no_akun" class="form-control">
         </div>

         <div class="form group">
           <label>Nama Akun</label>
           <input type="text" name="nama_akun" id="nama_akun" class="form-control">
         </div>

         <div class="form group">
           <label>Keterangan Akun</label>
           <input type="text" name="keterangan_akun" id="keterangan_akun" class="form-control">
         </div>

        <div style="margin-top: 30px; float: right">
         <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary" name="tambah_akun">Save changes</button>
        
        </div>
        </Form>


      </div>
    </div>
  </div>
</div> -->

              </div>
            </div>
           
          </div>
        </div>
      </div>


   

</body>
</html>