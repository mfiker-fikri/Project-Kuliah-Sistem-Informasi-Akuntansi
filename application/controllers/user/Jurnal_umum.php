<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal_umum extends CI_Controller {

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
    $this->load->view("user/jurnal_umum.php", $data);
    $this->load->view("template/footer.php");

    }



    public function jurnalUmum(){
        $titleTag = 'Jurnal Umum';
        $content = 'user/jurnal_umum_main';
      
        $this->load->view('template',compact('content','listJurnal','titleTag','tahun'));
    }

    public function jurnalUmumDetail(){
        $content = 'user/jurnal_umum_main';
        $titleTag = 'Jurnal Umum';

        $bulan = $this->input->post('bulan',true);
        $tahun = $this->input->post('tahun',true);
        $jurnals = null;

        if(empty($bulan) || empty($tahun)){
            redirect('user/jurnal_umum');
        }

        $jurnals = $this->jurnal->getJurnalJoinAkunDetail($bulan,$tahun);
        $totalDebit = $this->jurnal->getTotalSaldoDetail('debit',$bulan,$tahun);
        $totalKredit = $this->jurnal->getTotalSaldoDetail('kredit',$bulan,$tahun);

        if($jurnals==null){
            $this->session->set_flashdata('dataNull','Data Jurnal Dengan Bulan '.bulan($bulan).' Pada Tahun '.date('Y',strtotime($tahun)).' Tidak Di Temukan');
            redirect('user/jurnal_umum');
        }

        $this->load->view('template',compact('content','jurnals','totalDebit','totalKredit','titleTag'));
    }

    public function createJurnal(){
        $title = 'Tambah'; 
        $content = 'user/form_jurnal'; 
        $action = 'user/jurnal_umum/createJurnal'; 
        $tgl_input = date('Y-m-d H:i:s'); 
        $id_user = $this->session->userdata('user_nama'); 
        $titleTag = 'Tambah Jurnal Umum';

        if(!$_POST){
            $data = (object) $this->jurnal->getDefaultValues();
        }else{
            $data = (object) [
                'id_user'=>$id_user,
                'no_reff'=>$this->input->post('no_reff',true),
                'tgl_input'=>$tgl_input,
                'tgl_transaksi'=>$this->input->post('tgl_transaksi',true),
                'jenis_saldo'=>$this->input->post('jenis_saldo',true),
                'saldo'=>$this->input->post('saldo',true)
            ];
        }

        if(!$this->jurnal->validate()){
            $this->load->view('template',compact('content','title','action','data','titleTag'));
            return;
        }
        
        $this->jurnal->insertJurnal($data);
        $this->session->set_flashdata('berhasil','Data Jurnal Berhasil Di Tambahkan');
        redirect('user/jurnal_umum');    
    }

    public function editForm(){
        if($_POST){
            $id = $this->input->post('id',true);
            $title = 'Edit'; 
            $content = 'user/form_jurnal'; 
            $action = 'user/jurnal_umum/editForm'; 
            $titleTag = 'Edit Jurnal Umum';

            $data = (object) $this->jurnal->getJurnalById($id);


            $this->load->view('template',compact('content','title','action','data','id','titleTag'));
             
        }else{
             
         redirect('user/jurnal_umum');
        }

    }

    public function editJurnal($id = null){

		 $title = 'Edit'; 
		 $content = 'user/form_jurnal'; 
		 $action = 'user/jurnal_umum/editJurnal/'.$id; 
		 $tgl_input = date('Y-m-d H:i:s'); 
		 $id_user = $this->session->userdata('user_nama'); 
		 $titleTag = 'Edit Jurnal Umum';
		 
        if($_POST){

        $data = (object) [
                'id_user'=>$id_user,
                'no_reff'=>$this->input->post('no_reff',true),
                'tgl_input'=>$tgl_input,
                'tgl_transaksi'=>$this->input->post('tgl_transaksi',true),
                'jenis_saldo'=>$this->input->post('jenis_saldo',true),
                'saldo'=>$this->input->post('saldo',true)
            ];
           
            $id = $this->input->post('id',true);
        }

        if(!$this->jurnal->validate()){
            $this->load->view('template',compact('content','title','action','data','id','titleTag'));
            return;
        }
        
        $this->jurnal->updateJurnal($id,$data);
        $this->session->set_flashdata('berhasil','Data Jurnal Berhasil Di Ubah');
        redirect('user/jurnal_umum');    
    }

    public function deleteJurnal(){
        $id = $this->input->post('id',true);
        $this->jurnal->deleteJurnal($id);
        $this->session->set_flashdata('berhasilHapus','Data Jurnal berhasil di hapus');
        redirect('user/jurnal_umum');
    }



}