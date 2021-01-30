<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url','form', 'sia', 'tgl_indo']);
          $this->load->model('Akun_model','akun',true);
         $this->load->model('Jurnal_model','jurnal',true);
        $this->load->library('session','form_validation');
    }

public function index(){
    
    $data["dataAkun"] = $this->Akun_model->getAkun();


    $dataAkunTransaksi = $this->jurnal->getAkunInJurnal();
        
      $data["listJurnal"] = $this->jurnal->getJurnalByYearAndMonth();
     $data["tahun"]  = $this->jurnal->getJurnalByYear();

    $this->load->view("template/header.php");
    $this->load->view("user/laporan.php", $data);
    $this->load->view("template/footer.php");
}

 public function laporan(){
        $titleTag = 'Laporan';
        $content = 'user/laporan';
        $listJurnal = $this->jurnal->getJurnalByYearAndMonth();
        $tahun = $this->jurnal->getJurnalByYear();
        $this->load->view('template',compact('content','listJurnal','titleTag','tahun'));
    }

    public function laporanCetak(){
        $bulan = $this->input->post('bulan',true);
        $tahun = $this->input->post('tahun',true);
        $titleTag = 'Laporan '.bulan($bulan).' '.$tahun;

        $dataAkun = $this->akun->getAkunByMonthYear($bulan,$tahun);

        $jurnals = $this->jurnal->getJurnalJoinAkunDetail($bulan,$tahun);
        $totalDebit = $this->jurnal->getTotalSaldoDetail('debit',$bulan,$tahun);
        $totalKredit = $this->jurnal->getTotalSaldoDetail('kredit',$bulan,$tahun);

        $data = null;
        $saldo = null;
        foreach($dataAkun as $row){
            $data[] = (array) $this->jurnal->getJurnalByNoReffMonthYear($row->no_reff,$bulan,$tahun);
            $saldo[] = (array) $this->jurnal->getJurnalByNoReffSaldoMonthYear($row->no_reff,$bulan,$tahun);
        }

        if($data == null || $saldo == null){
            $this->session->set_flashdata('dataNull','Laporan Dengan Bulan '.bulan($bulan).' Pada Tahun '.date('Y',strtotime($tahun)).' Tidak Di Temukan');
            redirect('laporan');
        }

        $jumlah = count($data);



        $data = $this->load->view('user/laporan',compact('titleTag','dataAkun','bulan','tahun','jurnals','totalDebit','totalKredit','data','saldo','jumlah'),true);
        // echo $data;
        // die();

        $this->load->library('pdf');
        $this->load->view("user/laporan_main.php" ,$data);

        $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
  
$this->dompdf->loadHtml($html);
$this->dompdf->setPaper('A4', 'landscape');
$this->dompdf->render();
$this->dompdf->stream("Laporan_Akhir.pdf", array("Attachment"=>0));
    }

}