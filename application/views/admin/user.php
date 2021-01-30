

    <!-- Main content -->
    <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Menu Admin</a>
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
            <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout"   class="dropdown-item"><i class="ni ni-user-run"></i>
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
                  <h3 class="mb-0">Kelola User</h3>
                </div>
                <!-- <div class="col-12 my-3">
                  <a href="<?= base_url('data_akun/tambah') ?>" class="btn btn-primary mt-2">contoh</a>
                </div> -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-plus "></i>&nbsp;Tambah Data User</button>
                <table class="table" style="margin-top: 50px">
                <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Nama User</th>
      <th scope="col">Role</th>
      <th scope="col=">Aksi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   
  <?php 
  $no = 1;
  foreach ($user as $usr) :
  ?>
  <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $usr->username ?></td>
      <td><?php echo $usr->nama_user ?></td>
      
      <td><?php echo $usr->role ?></td>
      <td style="cursor: pointer;" onClick="select_data(
        '<?=$usr->id_user ?>',
        '<?=$usr->username ?>',
        '<?=$usr->password ?>',
        '<?=$usr->nama_user ?>',
        '<?=$usr->role ?>'
      )" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pen"></i> </td>
      <td>
        <a href="<?php echo base_url("index.php/admin/user/hapus/".$usr->id_user)?>"><i class="fa fa-trash"></i></a>
      </td>
     
      
    </tr>
    <?php endforeach ;?>
   
  </tbody>
</table>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <Form method="POST"  action="<?php echo site_url('admin/User/tambah_user')?>">
         <div class="form group">
          <input type="hidden" name="id_user" id="id_user">
           <label>Username</label>
           <input type="text" name="username" class="form-control" id="username">
         </div>

         <div class="form group">
           <label>Password</label>
           <input type="password" name="password" class="form-control" id="password">
         </div>

         <div class="form group">
           <label>Nama User</label>
           <input type="text" name="nama_user" class="form-control" id="nama_user">
         </div>

         <div class="form-group">
          <label>Pilih Role</label>
          <select id="role" name="role" class="form-control" id="role">
            <option value="">Pilih</option>
            <option value="admin">Admin</option>
            <option value="akuntan">Akuntan</option>
            <option value="kasir">Kasir</option>
          </select>
           
         </div>



        <div style="margin-top: 30px; float: right">
         <button type="reset" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="tambah_transaksi">Simpan</button>
        
        </div>
        </Form>    
              
              </div>
            </div>
           
          </div>
        </div>
      </div>

</body>
</html>