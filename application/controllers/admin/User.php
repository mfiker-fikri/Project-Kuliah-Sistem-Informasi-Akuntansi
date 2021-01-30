<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("User_model");
        $this->load->library('form_validation');
        
    }

public function index(){
    $data["user"] = $this->User_model->tampil_data()->result();
    
    $this->load->view("template_admin/header.php");
    $this->load->view("admin/user.php", $data);
    $this->load->view("template_admin/footer.php");
}
public function tambah_user()
{

    $this->User_model->tambah_user();
    $this->session->set_flashdata('berhasil','Data User Berhasil Ditambahkan');
    redirect('admin/user');
}

public function edit_user() {
    if($this->input->post('submit'))
    {
        if($this->User_model->validation('update'))
        {
            $this->User_model->edit();
            redirect('admin/user');
        }
        $data['user'] = $this->User_model->view_edit($transaksi_id);
        
        $this->load->view("template_admin/header.php");
        $this->load->view("admin/user_edit.php", $data);
        $this->load->view("template_admin/footer.php");
    }
}
public function hapus ($id_user){
    $this->User_model->delete($id_user);
    $this->session->set_flashdata('berhasilHapus','Data User Berhasil Dihapus');
    redirect('admin/user');
    
}

}