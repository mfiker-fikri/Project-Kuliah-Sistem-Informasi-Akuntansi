<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        $this->load->model("Transaksi_model");
         $this->load->model("Penjualan_model");
        if($this->admin->is_role() != "kasir"){
            redirect("login/");
        }
    }

    public function index()
    {
       
    $data["transaksi"] = $this->Penjualan_model->tampil_data()->result();   
$data['total_penjualan'] = $this->Penjualan_model->hitungJumlah();

    $data["transaksi"] = $this->Transaksi_model->tampil_data()->result();
$data['total_pembelian'] = $this->Transaksi_model->hitungJumlah();



        $this->load->view("template_kasir/header.php");
        $this->load->view("kasir/dashboard", $data);           
        $this->load->view("template_kasir/footer.php") ;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}