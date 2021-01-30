
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
     <!--  <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
               
        </div>
      </div> -->
      <div class="row mt-5">
        <div class="col mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <!-- <div class="row align-items-center"> -->
                <div class="col">
                  <h3 class="mb-0">Input Penjualan</h3>
                </div>
                <!-- <div class="col-12 my-3">
                  <a href="<?= base_url('data_akun/tambah') ?>" class="btn btn-primary mt-2">contoh</a>
                </div> -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onClick="refresh()" style="margin-bottom: 50px; margin-top: 20px">
                  <i class="fa fa-plus"></i>Tambah Data Penjualan</button>

                  <!-- <a class="btn btn-warning" href="<?php echo base_url('index.php/kasir/transaksi/pdf')?>" style="margin-bottom: 50px; margin-top: 20px"  ><i class="fa fa-file"> Cetak PDF</i></a> -->

                    <a class="btn btn-warning" href="<?php echo $url_cetak; ?>" style="margin-bottom: 50px; margin-top: 20px" ><i class="fa fa-file"> Cetak PDF</i></a>

<form method="get" action="">
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />
        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>
        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>
        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>
        <button type="submit">Tampilkan</button>
        <a href="<?= base_url("index.php/kasir/penjualan"); ?>">Reset Filter</a>
    </form>
    <hr />

    <b><?php echo $ket; ?></b><br /><br />
  


  <table id="myTable" align="center">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama Penjualan</th>
      <th scope="col">Tanggal Penjualan</th>
      
      <th scope="col">Nominal Penjualan</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   
  <?php 
  $no = 1;
  foreach ($penjualan as $trs) :
  ?>
  <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $trs->nama_transaksi ?></td>
    <!--   <td><?php echo $trs->tgl_transaksi ?></td> -->
      <td><?=date('d F Y', strtotime($trs->tgl_transaksi)); ?></td>
      <td>Rp. <?php echo $trs->nominal_transaksi ?></td>
      <td><?php echo $trs->keterangan ?></td>
      <td style="cursor: pointer;" onClick="select_data_penjualan(
        '<?=$trs->penjualan_id ?>',
        '<?=$trs->nama_transaksi ?>',
        '<?=$trs->tgl_transaksi ?>',
        '<?=$trs->nominal_transaksi ?>',
        '<?=$trs->keterangan ?>'
      )" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pen" style="color:blue"></i></td>
      <td><a href="<?php echo base_url("index.php/kasir/Penjualan/hapus/".$trs->penjualan_id)?>"><i class="fa fa-trash"></i></a></td>
      
     

    </tr>
    <?php endforeach ;?>
    <thead>
    <tr>
       <th scope="col"></th>
      <th colspan="2" scope="col">TOTAL <small>(Pemasukan)</small></th>
      <td ><strong>Rp. <?php echo $total_penjualan ?></strong></td>
      <th scope="col"></th>
        <th scope="col"></th>
          <th scope="col"></th>
    </tr>
  </thead>
  
   
  </tbody>


</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="color: red;"><?php echo validation_errors(); ?></div>
      <div class="modal-body">
      <Form method="POST"  action="<?php echo site_url('kasir/Penjualan/tambah_penjualan')?>">
         <div class="form group">
         <input type="hidden" name="penjualan_id" id="penjualan_id">
           <label>Nama Penjualan</label>
           <input type="text" name="nama_transaksi" id="nama_transaksi" class="form-control">
         </div>

         <div class="form group">
           <label>Tanggal Penjualan</label>
           
           <input type="date" name="tgl_transaksi"  id="tgl_transaksi" class="form-control">
         </div>

         <div class="form group">
           <label>Nominal Penjualan</label>
           <input type="number" name="nominal_transaksi" id="nominal_transaksi" class="form-control">
         </div>

         <div class="form group">
           <label>Keterangan</label>
           <input type="text" name="keterangan" id="keterangan" class="form-control">
         </div>

        <div style="margin-top: 30px; float: right">
         <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <!-- <button type="submit" class="btn btn-primary" name="submit">Save changes</button> -->
        
        <button type="submit" class="btn btn-primary" name="tambah_penjualan">Save changes</button>
        </div>
        </Form>



              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>



  <script src="<?= base_url('asset/vendor/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });
        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }
            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>

  <!-- Argon Scripts -->
  <!-- Core -->
 
   

</body>
</html>