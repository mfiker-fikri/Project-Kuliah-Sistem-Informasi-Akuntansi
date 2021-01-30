<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
   public function tampil_data()
   {
       return $this->db->get('users') ;
   }
   public function tambah_user()
   {
   	$id_user = $this->input->post('id_user');
      $username = $this->input->post('username');
   	$password = md5($this->input->post("password"));
   	$nama_user = $this->input->post('nama_user');
   	$role = $this->input->post('role');

   	$data = array (
   		'username' => $username,
   		'password' => $password,
   		'nama_user' => $nama_user,
   		'role' => $role
   	);
   	if($id_user == null || $id_user == "") {
         $this->db->insert('users',$data);
      } else {
         $this->db->where('id_user',$id_user);
         $this->db->update('users',$data);
      }
   }
   public function view_edit(){
      return $this->db->where('id_user', $id_user);
      return $this->db->get('id_user');
   }
   public function edit($id_user) 
   {
      $data = array (
         "id_user" => $this->input->post("id_user"),
         "username" => $this->input->post("username"),
         "password" => $this->input->post("nama_user"),
         "nama_user" => $this->input->post("nama_user"),
         "role" => $this->input->post("role"),
      );
      $this->db->where('id_user', $id_user);
      $this->db->update('users', $data);
   }
   public function delete ($id_user) {
      $this->db->where('id_user',$id_user);
      $this->db->delete('users');
   }

}