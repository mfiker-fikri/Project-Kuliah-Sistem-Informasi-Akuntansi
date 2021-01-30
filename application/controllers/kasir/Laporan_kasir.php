<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_kasir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

public function index(){
    
    $this->load->view("template_kasir/header.php");
    $this->load->view("kasir/laporan_kasir.php");
    $this->load->view("template_kasir/footer.php");
}

}