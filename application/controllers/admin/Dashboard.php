<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "admin"){
            redirect("login/");
        }
    }

    public function index()
    {

            
    $this->load->view("template_admin/header.php");
    $this->load->view("admin/dashboard");   
    $this->load->view("template_admin/footer.php");
            

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}