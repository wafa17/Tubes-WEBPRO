<?php

class beranda extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->model('mlogin');
	}
	//beranda
	public function index(){
		$this->load->view('home/beranda');
	}
	public function loadaboutus(){
		$this->load->view('home/aboutus');
	}
	public function loadberanda2(){
		$this->load->view('home/beranda2');
	}
	
	function login_proses(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->mlogin->cek_login($username,$password);
		if($cek == TRUE){
			$password = $cek->password;
			$username = $cek->username;
			$this->session->set_userdata('password',$password);
			$this->session->set_userdata('username',$username);
			$this->load->view('home/beranda2');
		}else{
			redirect('beranda');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('beranda');
	}

	public function register() {
		$email = $this->input->post('email');
		$password = $this ->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$nama_institusi = $this->input->post('nama_instutisi');
		$no_hp = $this->input->post('no_hp');
		$data = array (
			'email' => $email,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'nama_instutisi' => $nama_institusi,
			'no_hp' => $no_hp,
		);
		$this->mlogin->registrasi('registrasi',$data);
		$this->load->view('home/beranda2');
	}

	//fullsite
	public function loadfullsite() {
		$config['base_url'] = site_url('beranda/loadfullsite');
		$config['total_rows'] = $this->db->count_all('katalog'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
	
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']    = '<div class="pagination-fullsite pagging"><ul class="pagination pagination-sm justify-content-end" style="margin:20px 0">';
		$config['full_tag_close']   = '</ul></div>';
		
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_link']        = 'Next';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_link']        = 'Prev';
		$config['prev_tagl_close']  = '</span>Next</li>';
		
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_link']       = 'First';
		$config['first_tagl_close'] = '</span></li>';
		
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_link']        = 'Last';
		$config['last_tagl_close']  = '</span></li>';
    // End style pagination
 
		$this->pagination->initialize($config); //Set konfigurasi pagination
		
		$data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

		//panggil function GetKatalog_list yang ada pada model Katalog_model. 
		$data['katalog'] = $this->mlogin->GetKatalog_list($config["per_page"], $data['page']);           

		$data['pagination'] = $this->pagination->create_links();

		//load view
		$this->load->view('fullsite/Header', $data);
		$this->load->view('fullsite/Katalog', $data);
		$this->load->view('fullsite/Pencarian', $data);
	}

	//katalog

 }

?>