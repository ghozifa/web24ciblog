<?php

class Home extends CI_Controller{

	function __Construct(){
		parent::__Construct();
	}

	function index(){
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['email'] = $session_data['email'];
			$data['id'] = $session_data['id'];
			$data['nama'] = $session_data['nama'];
			$this->load->view('home_view', $data);
		}
		else{
			redirect('login', 'refresh');
		}
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}
}

