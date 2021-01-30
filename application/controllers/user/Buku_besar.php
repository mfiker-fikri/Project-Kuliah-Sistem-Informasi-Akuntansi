<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_besar extends CI_Controller {

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
        
      $data["listBuku"] = $this->jurnal->getJurnalByYearAndMonth();
     $data["tahun"]  = $this->jurnal->getJurnalByYear();
    
    $this->load->view("template/header.php");
    $this->load->view("user/buku_besar.php", $data);
    $this->load->view("template/footer.php");
}


    public function bukuBesar(){
        $titleTag = 'Buku Besar';
        $content = 'user/buku_besar';
        // $listJurnal = $this->jurnal->getJurnalByYearAndMonth();
        // $tahun = $this->jurnal->getJurnalByYear();
        $this->load->view('template',compact('content','listJurnal','titleTag','tahun'));
    }

    public function bukuBesarDetail(){
        $content = 'user/buku_besar_main';
        $titleTag = 'Buku Besar';
        
        $bulan = $this->input->post('bulan',true);
        $tahun = $this->input->post('tahun',true);

        if(empty($bulan) ||empty($tahun)){
            redirect('user/buku_besar');
        }
        
        $dataAkun = $this->akun->getAkunByMonthYear($bulan,$tahun);
        $data = null;
        $saldo = null;

        foreach($dataAkun as $row){
            $data[] = (array) $this->jurnal->getJurnalByNoReffMonthYear($row->no_reff,$bulan,$tahun);
            $saldo[] = (array) $this->jurnal->getJurnalByNoReffSaldoMonthYear($row->no_reff,$bulan,$tahun);
        }

        if($data == null || $saldo == null){
            $this->session->set_flashdata('dataNull','Data Buku Besar Dengan Bulan '.bulan($bulan).' Pada Tahun '.date('Y',strtotime($tahun)).' Tidak Di Temukan');
            redirect('user/buku_besar');
        }

        $jumlah = count($data);

        $this->load->view('template',compact('content','titleTag','dataAkun','data','jumlah','saldo'));
    }

}