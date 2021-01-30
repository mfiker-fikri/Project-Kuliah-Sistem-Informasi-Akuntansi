<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
         $this->load->helper(['url','form', 'sia', 'tgl_indo']);
          $this->load->model('Akun_model','akun',true);
         $this->load->model('Jurnal_model','jurnal',true);
        $this->load->library('session','form_validation');
        $this->load->model("Transaksi_model");
         $this->load->model("Penjualan_model");
        
        //cek session dan level user
        if($this->admin->is_role() != "akuntan"){
            redirect("login/");
        }
    }

    public function index()
    {

         $titleTag = 'Dashboard';
        $content = 'user/dashboard';

        $dataAkun = $this->Akun_model->getAkun();

        $dataAkunTransaksi = $this->jurnal->getAkunInJurnal();

          foreach($dataAkunTransaksi as $row){
            $data[] = (array) $this->jurnal->getJurnalByNoReff($row->no_reff);
            $saldo[] = (array) $this->jurnal->getJurnalByNoReffSaldo($row->no_reff);
        }


            $jumlah = count($data);
            $listBuku = $this->jurnal->getJurnalByYearAndMonth();
            $tahun  = $this->jurnal->getJurnalByYear();
            $jurnals = $this->jurnal->getJurnalJoinAkun();
            $totalDebit = $this->jurnal->getTotalSaldo('debit');
            $totalKredit = $this->jurnal->getTotalSaldo('kredit');


              $transaksi = $this->Penjualan_model->tampil_data()->result();   
               $total_penjualan = $this->Penjualan_model->hitungJumlah();

               $transaksi = $this->Transaksi_model->tampil_data()->result();
               $total_pembelian = $this->Transaksi_model->hitungJumlah();

                 $dataAkun = $this->Akun_model->getAkun();
    $total_akun = $this->Akun_model->hitungAkun();



         $this->load->view('template',compact('content','dataAkun','titleTag','jurnals','totalDebit','totalKredit','jumlah','data','saldo','dataAkunTransaksi','transaksi','total_penjualan','transaksi','total_pembelian','total_akun'));
        // $this->load->view("template/header.php");
        // $this->load->view("user/dashboard", $data);           
        // $this->load->view("template/footer.php") ;
        
    }


   

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}