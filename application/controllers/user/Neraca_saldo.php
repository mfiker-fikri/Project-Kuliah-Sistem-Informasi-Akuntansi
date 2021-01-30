<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca_saldo extends CI_Controller {

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
        
      $data["listNeraca"] = $this->jurnal->getJurnalByYearAndMonth();
     $data["tahun"]  = $this->jurnal->getJurnalByYear();
    
    $this->load->view("template/header.php");
    $this->load->view("user/neraca_saldo.php", $data);
    $this->load->view("template/footer.php");
}

 public function neracaSaldo(){
        $titleTag = 'Neraca Saldo';
        $content = 'user/neraca_saldo';
        // $listJurnal = $this->jurnal->getJurnalByYearAndMonth();
        // $tahun = $this->jurnal->getJurnalByYear();
        $this->load->view('template',compact('content','listJurnal','titleTag','tahun'));
    }

    public function neracaSaldoDetail(){
        $content = 'user/neraca_saldo_main';
        $titleTag = 'Neraca Saldo';

        $bulan = $this->input->post('bulan',true);
        $tahun = $this->input->post('tahun',true);

        if(empty($bulan) || empty($tahun)){
            redirect('neraca_saldo');
        }

        $dataAkun = $this->akun->getAkunByMonthYear($bulan,$tahun);
        $data = null;
        $saldo = null;
        
        foreach($dataAkun as $row){
            $data[] = (array) $this->jurnal->getJurnalByNoReffMonthYear($row->no_reff,$bulan,$tahun);
            $saldo[] = (array) $this->jurnal->getJurnalByNoReffSaldoMonthYear($row->no_reff,$bulan,$tahun);
        }

        if($data == null || $saldo == null){
            $this->session->set_flashdata('dataNull','Neraca Saldo Dengan Bulan '.bulan($bulan).' Pada Tahun '.date('Y',strtotime($tahun)).' Tidak Di Temukan');
            redirect('neraca_saldo');
        }

        $jumlah = count($data);

        $this->load->view('template',compact('content','titleTag','dataAkun','data','jumlah','saldo'));
    }


}