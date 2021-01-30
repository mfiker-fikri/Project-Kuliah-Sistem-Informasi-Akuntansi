<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Transaksi_model");
         $this->load->model("Penjualan_model");
        $this->load->library('form_validation');
    }

public function index(){
	  $data["transaksi"] = $this->Penjualan_model->tampil_data()->result();   
$data['total_penjualan'] = $this->Penjualan_model->hitungJumlah();

    $data["pembelian"] = $this->Transaksi_model->tampil_data()->result();
$data['total_pembelian'] = $this->Transaksi_model->hitungJumlah();

    
    $this->load->view("template/header.php");
    $this->load->view("user/transaksi.php", $data);
    $this->load->view("template/footer.php");
}

}