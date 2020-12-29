<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
 * @author Muhammad Guruh Ajinugroho
 * @Email  mgajinugroho@gmail.com
 * 
 */

class M_login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set("Asia/Jakarta"); 
	}
	
	public function process(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$sql = $this->db->query("SELECT * FROM user WHERE username='$username' LIMIT 1");

		if($sql->num_rows() == 1){
			 // If there is a user, then create session data
			$row = $sql->row();
			if(password_verify($password,$row->password)){
				$data = array(
					'id' => $row->id,
					'username' => $row->username,
					'email' => $row->email,
					'nama' => $row->nama,
					'role' => $row->role,
					'is_active' => $row->is_active,
					'created_at' => $row->created_at,
					'created_by' => $row->created_by,
					'updated_at' => $row->updated_at,
					'updated_by' => $row->updated_by
				);
				$this->session->set_userdata($data);
				redirect(site_url('admin'));
				return true;
			}else{
				$this->session->set_flashdata('error','Password salah, silahkan coba lagi.');
				redirect(site_url('login'));
				return false;
			}
		}else{
			$this->session->set_flashdata('error','User tidak ditemukan atau terjadi kesalahan input saat login, silahkan coba lagi.');
			redirect(site_url('login'));
			return false;
		}
	}
}
