<!DOCTYPE html>
<html><head>
	<title></title>
	<style type="text/css">
	
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }

    img{
    	height: 100px;
    }

	</style>
</head><body>


	<div style="text-align: center;">
	  <img src="asset/images/brand/Logo_akuntir.png" class="navbar-brand-img" alt="...">
	<h3 style="margin-top: -20px">Laporan Penjualan</h3>
	<h4>PT. Tirta Medical Centre</h4>
	 </div>
	 <div align="center">
	 <table id="myTable" class="table table-striped table-boarder" width="100%" align="center">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama Penjualan</th>
      <th scope="col">Tanggal Penjualan</th>
      
      <th scope="col">Nominal Penjualan</th>
      <th scope="col">Keterangan</th>
      
      <th></th>
    </tr>
  </thead>
  <tbody>
   
  <?php 
  $no = 1;
  foreach ($transaksi as $trs) :
  ?>
  <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $trs->nama_transaksi ?></td>
    <!--   <td><?php echo $trs->tgl_transaksi ?></td> -->
      <td><?=date('d F Y', strtotime($trs->tgl_transaksi)); ?></td>
      <td>Rp. <?php echo $trs->nominal_transaksi ?></td>
      <td><?php echo $trs->keterangan ?></td>
    
    </tr>
    <?php endforeach ;?>
   
  </tbody>
  <tr>
       <th scope="col"></th>
      <th colspan="2" scope="col">TOTAL <small>(Pemasukan)</small></th>
      <td ><strong>Rp. <?php echo $total_penjualan ?></strong></td>
      <th scope="col"></th>
        <th scope="col"></th>
          <th scope="col"></th>
    </tr>
</table>
</div>


</body></html>