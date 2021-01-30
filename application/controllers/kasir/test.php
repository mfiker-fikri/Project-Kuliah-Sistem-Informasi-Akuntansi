<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

public function index(){
    
    $this->load->view("template_kasir/header.php");
    $this->load->view("kasir/test.php");
    $this->load->view("template_kasir/footer.php");
}

}