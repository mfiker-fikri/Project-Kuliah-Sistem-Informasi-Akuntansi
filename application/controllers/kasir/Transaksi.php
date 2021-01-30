<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Transaksi_model");
        $this->load->library('form_validation');
    }

public function index(){


    $data["transaksi"] = $this->Transaksi_model->tampil_data()->result();

$data['total_pembelian'] = $this->Transaksi_model->hitungJumlah();


     if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl_transaksi = $_GET['tanggal'];
                
                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl_transaksi));
                $url_cetak = 'kasir/transaksi/cetak?filter=1&tahun='.$tgl_transaksi;
                $transaksi = $this->Transaksi_model->view_by_date($tgl_transaksi); // Panggil fungsi view_by_date yang ada di Transaksi_model
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'kasir/transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->Transaksi_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Transaksi_model
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Transaksi Tahun '.$tahun;
                $url_cetak = 'kasir/transaksi/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->Transaksi_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Transaksi_model
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $url_cetak = 'kasir/transaksi/cetak';
            $transaksi = $this->Transaksi_model->view_all(); // Panggil fungsi view_all yang ada di Transaksi_model
        }
        
    $data['ket'] = $ket;
    $data['url_cetak'] = base_url('index.php/'.$url_cetak);
    $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->Transaksi_model->option_tahun();

    $this->load->view("template_kasir/header.php");
    $this->load->view("kasir/transaksi.php", $data);
    $this->load->view("template_kasir/footer.php");


}


public function tambah_transaksi(){
  

        $this->Transaksi_model->tambah_transaksi();

    // $this->akun_model->input_data($data, 'data_akun');
    redirect('kasir/transaksi');
}

public function hapus ($transaksi_id){
    $this->Transaksi_model->delete($transaksi_id);
    redirect('kasir/transaksi');
    
}

// public function pdf(){
//     $this->load->library('pdf');

//     $data["transaksi"] =  $this->Transaksi_model->tampil_data('tb_transaksi')->result();
//     $this->load->view("kasir/laporan_pdf.php" ,$data);

//     $paper_size = 'A4';
//     $orientation = 'landscape';
//     $html = $this->output->get_output();
  
// $this->dompdf->loadHtml($html);
// $this->dompdf->setPaper('A4', 'landscape');
// $this->dompdf->render();
// $this->dompdf->stream("Laporan_transaksi.pdf", array("Attachment"=>0));
// }


  public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl_transaksi = $_GET['tanggal'];
                
                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl_transaksi));
                $transaksi = $this->Transaksi_model->view_by_date($tgl_transaksi); // Panggil fungsi view_by_date yang ada di Transaksi_model
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $transaksi = $this->Transaksi_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Transaksi_model
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Transaksi Tahun '.$tahun;
                $transaksi = $this->Transaksi_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Transaksi_model
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Transaksi';
            $transaksi = $this->Transaksi_model->view_all(); // Panggil fungsi view_all yang ada di Transaksi_model
        }
        
        $data['ket'] = $ket;
        $data['transaksi'] = $transaksi;
        $data['total_pembelian'] = $this->Transaksi_model->hitungJumlah();

     
    // ob_start();
    // $this->load->view('kasir/transaksi.php', $data);
    // $html = ob_get_contents();
    //     ob_end_clean();
        
    //     require_once('./asset/html2pdf/html2pdf.class.php');
    // $pdf = new HTML2PDF('P','A4','en');
    // $pdf->WriteHTML($html);
    // $pdf->Output('Data_Transaksi.pdf', 'D');


 $this->load->library('pdf');

    $this->load->view("kasir/laporan_pdf.php" ,$data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
  
$this->dompdf->loadHtml($html);
$this->dompdf->setPaper('A4', 'landscape');
$this->dompdf->render();
$this->dompdf->stream("Laporan_transaksi.pdf", array("Attachment"=>0));

}

}