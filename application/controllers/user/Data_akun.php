<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        // $this->load->model("Akun_model");
         $this->load->model('Akun_model','akun',true);
         $this->load->model('Jurnal_model','jurnal',true);
        $this->load->library('session','form_validation');
    }

public function index(){
    // $data["data_akun"] = $this->Akun_model->tampil_data()->result();
    $data["dataAkun"] = $this->Akun_model->getAkun();
    $data['total_akun'] = $this->Akun_model->hitungAkun();


    $this->load->view("template/header.php");
    $this->load->view("user/data_akun", $data) ;
    $this->load->view("template/footer.php");

   
}

// public function tambah_akun(){
//     // $no_akun = $this->input->post('no_akun');
//     // $nama_akun = $this->input->post('nama_akun');
//     // $keterangan_akun = $this->input->post('keterangan_akun');

//     // $data = array(
//     //     'no_akun'=> $no_akun,
//     //     'nama_akun'=> $nama_akun,
//     //     'keterangan_akun'=> $keterangan_akun,
//     // );

//         $this->Akun_model->tambah_akun();

//     // $this->akun_model->input_data($data, 'data_akun');
//     redirect('user/data_akun');
// }


// public function hapus ($akun_id){
//     $this->Akun_model->delete($akun_id);
//     redirect('user/data_akun');
    
// }


    public function dataAkun(){
        $content = 'user/data_akun';
        $titleTag = 'Data Akun';
        $dataAkun = $this->akun->getAkun();
        $this->load->view('template',compact('content','dataAkun','titleTag'));
    }

    public function isNamaAkunThere($str){
        $namaAkun = $this->akun->countAkunByNama($str);
        if($namaAkun >= 1){
            $this->form_validation->set_message('isNamaAkunThere', 'Nama Akun Sudah Ada');
            return false;
        }
        return true;
    }

    public function isNoAkunThere($str){
        $noAkun = $this->akun->countAkunByNoReff($str);
        if($noAkun >= 1){
            $this->form_validation->set_message('isNoAkunThere', 'No.Reff Sudah Ada');
            return false;
        }
        return true;
    }

    public function createAkun(){
        $title = 'Tambah';
        $titleTag = 'Tambah Data Akun';
        $action = 'user/data_akun/createAkun';
        $content = 'user/form_akun';

        if(!$_POST){
            $data = (object) $this->akun->getDefaultValues();
        }else{
            $data = (object) $this->input->post(null,true);
            // $data->id_user = $this->session->userdata('user_nama');
        }

        if(!$this->akun->validate()){
            $this->load->view('template',compact('content','title','action','data','titleTag'));
            return;
        }
        
        $this->akun->insertAkun($data);
        $this->session->set_flashdata('berhasil','Data Akun Berhasil Ditambahkan');
        redirect('user/data_akun');
    }

    public function editAkun($no_reff = null){
        $title = 'Edit';
        $titleTag = 'Edit Data Akun';
        $action = 'user/data_akun/editAkun/'.$no_reff;
        $content = 'user/form_akun';

        if(!$_POST){
            $data = (object) $this->akun->getAkunByNo($no_reff);
        }else{
            $data = (object) $this->input->post(null,true);
            // $data->id_user = $this->session->userdata('user_nama');
        }

        if(!$this->akun->validate()){
            $this->load->view('template',compact('content','title','action','data','titleTag'));
            return;
        }
        
        $this->akun->updateAkun($no_reff,$data);
        $this->session->set_flashdata('berhasil','Data Akun Berhasil Diubah');
        redirect('user/data_akun');
    }

    public function deleteAkun(){
        $id = $this->input->post('id',true);
        $noReffTransaksi = $this->jurnal->countJurnalNoReff($id);
        if($noReffTransaksi >= 0 ){
            $this->session->set_flashdata('dataNull','No.Reff '.$id.' Tidak Bisa Dihapus Karena Data Akun Ada Di Jurnal Umum');
            redirect('user/data_akun');
        }
        $this->akun->deleteAkun($id);
        $this->session->set_flashdata('berhasilHapus','Data akun dengan No.Reff '.$id.' berhasil Dihapus');
        redirect('user/data_akun');
    }

//jurnal

}