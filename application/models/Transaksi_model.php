<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
   public function tampil_data()
   {
       return $this->db->get('tb_transaksi') ;
   }

   public function view_edit()
   {
       $this->db->where('transaksi_id', $transaksi_id);
       return $this->db->get('tb_transaksi') ;
   }

   public function validation($mode)
   {
       $this->load->library('form_validation');
       if($mode == "save")
       $this->form_validation->set_rules('nama_transaksi', 'Nama Transaksi', 'required');
       $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'required');
       $this->form_validation->set_rules('nominal_transaksi', 'Nominal Transaksi', 'required');
       $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
       if($this->form_validation->run())
       return TRUE;
       else 
       return FALSe; 
   }



   public function tambah_transaksi()
   {
    $transaksi_id =  $this->input->post('transaksi_id');
    $nama_transaksi = $this->input->post('nama_transaksi');
    $tgl_transaksi = $this->input->post('tgl_transaksi');
    $nominal_transaksi = $this->input->post('nominal_transaksi');
    $keterangan = $this->input->post('keterangan');

    $data = array(
        'nama_transaksi'=> $nama_transaksi,
        'tgl_transaksi'=> $tgl_transaksi,
        'nominal_transaksi'=> $nominal_transaksi,
        
        'keterangan'=> $keterangan,
    );

    if($transaksi_id == null || $transaksi_id == "") {
    $this->db->insert('tb_transaksi', $data);
    }else{
        $this->db->where('transaksi_id', $transaksi_id);
        $this->db->update('tb_transaksi', $data) ;
        
    }

}

   public function delete($transaksi_id){
       $this->db->where('transaksi_id', $transaksi_id);
       $this->db->delete('tb_transaksi');
   }

    public function view_by_date($date){
        $this->db->where('DATE(tgl_transaksi)', $date); // Tambahkan where tanggal nya
        
    return $this->db->get('tb_transaksi')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
  }
    
  public function view_by_month($month, $year){
        $this->db->where('MONTH(tgl_transaksi)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tgl_transaksi)', $year); // Tambahkan where tahun
        
    return $this->db->get('tb_transaksi')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
  public function view_by_year($year){
        $this->db->where('YEAR(tgl_transaksi)', $year); // Tambahkan where tahun
        
    return $this->db->get('tb_transaksi')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
  }
    
  public function view_all(){
    return $this->db->get('tb_transaksi')->result(); // Tampilkan semua data transaksi
  }
    
    public function option_tahun(){
        $this->db->select('YEAR(tgl_transaksi) AS tahun'); // Ambil Tahun dari field tgl_transaksi
        $this->db->from('tb_transaksi'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tgl_transaksi)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl_transaksi)'); // Group berdasarkan tahun pada field tgl_transaksi
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }

public function hitungJumlah()
{
   $this->db->select_sum('nominal_transaksi');
   $query = $this->db->get('tb_transaksi');
   if($query->num_rows()>0)
   {
     return $query->row()->nominal_transaksi;
   }
   else
   {
     return 0;
   }
}
    
}

