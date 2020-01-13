<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mlogin extends CI_Model {
	//beranda
	function cek_login($username,$password){		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user')->row();
	}
	function tampil_data(){
		return $this->db->get('registrasi');
	}
	function registrasi($table,$data){
		$this->db->insert($table,$data);
	}
	function getusername(){
		$rows = $this->db->query("SELECT * FROM registrasi where nama_lengkap='".$this->session->nama_lengkap."'")->row_array();
		echo "$rows[nama_lengkap]";
	}

	//fullsite
	public function GetKatalog_list($limit, $start){
		$query = $this->db->get('katalog', $limit, $start);
		return $query;
	  }
 }	
