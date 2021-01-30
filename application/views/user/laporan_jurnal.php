<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titleTag.' Dicetak Oleh '.$this->session->userdata('user_nama') ?></title>
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
</head>
<body>
	<div style="text-align: center;">
	  <img src="asset/images/brand/Logo_akuntir.png" class="navbar-brand-img" alt="...">
	<h3 style="margin-top: -20px">Laporan Bulan <?= bulan($bulan) ?>  <?= $tahun ?></h3>
	<h4>PT. Tirta Medical Centre</h4>
	 </div>
    <!-- <h1 class="text-center">Laporan Bulan <?= bulan($bulan) ?>  <?= $tahun ?></h1> -->
    <hr>
   

    <h3 class="m-fix text-center" style="margin-top:40px">Jurnal Umum</h3>
    <table id="myTable" class="table table-striped table-boarder" width="100%" align="center">
        <tr class="text-center font-bold">
            <td>No.</td>
            <td>Tanggal</td>
            <td>Nama Akun</td>
            <td>Reff</td>
            <td>Debit</td>
            <td>Kredit</td>
        </tr>
        <?php
            $i=1;
            foreach($jurnals as $row):
                if($row->jenis_saldo=='debit'):
        ?>
                <tr>
                    <td class="text-center"><?= $i++ ?></td>
                    <td class="text-center"><?= date_indo($row->tgl_transaksi) ?></td>
                    <td class="text-left"><?= $row->nama_reff ?></td>
                    <td class="text-center"><?= $row->no_reff ?></td>
                    <td class="text-center"><?= 'Rp. '.number_format($row->saldo,0,',','.') ?></td>
                    <td class="text-center">Rp. 0</td>
                </tr>
        <?php 
                endif;
                if($row->jenis_saldo=='kredit'):
        ?>
                <tr>
                    <td class="text-center"><?= $i++ ?></td>
                    <td class="text-center"><?= date_indo($row->tgl_transaksi) ?></td>
                    <td class="text-center"><?= $row->nama_reff ?></td>
                    <td class="text-center"><?= $row->no_reff ?></td>
                    <td class="text-center">Rp. 0</td>
                    <td class="text-center"><?= 'Rp. '.number_format($row->saldo,0,',','.') ?></td>     
                </tr>  
        <?php 
                endif;
            endforeach;
        ?>
        <?php if($totalDebit->saldo != $totalKredit->saldo){ ?>
        <tr>
            <td colspan="4" class="text-center"><b>Jumlah Total</b></td>
            <td class="text-danger"><b><?= 'Rp. '.number_format($totalDebit->saldo,0,',','.') ?></b></td>
            <td colspan="2" class="text-danger"><b><?= 'Rp. '.number_format($totalKredit->saldo,0,',','.') ?></b></td>
        </tr>
        <tr  class="text-center bg-danger ">
            <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">TIDAK SEIMBANG</td>
        </tr>
        <?php }else{  ?>
        <tr>
            <td colspan="3" class="text-center"><b>Jumlah Total</b></td>
            <td class="text-success"><b><?= 'Rp. '.number_format($totalDebit->saldo,0,',','.') ?></b></td>
            <td colspan="2" class="text-success"><b><?= 'Rp. '.number_format($totalKredit->saldo,0,',','.') ?></b></td>
        </tr>
        <tr class="text-center bg-success">
            <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">SEIMBANG</td>
        </tr>
        <?php } ?>
    </table>
 <p class="text-left" style="margin-top:50px;">Dicetak Oleh <?= $this->session->userdata('user_nama') ?> Pada Tanggal 
        <?= date('d').' '.bulan(date('m')).' '.date('Y').' Pukul '.date('H:i:s').' WIB'?></p>
   
</body>
</html>