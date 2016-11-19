<?php

class Login extends CI_Controller{
	
	function __construction(){ //method pertama yang dipanggil
			parent::__construct;
	}

	function index(){
		if($this->session->userdata('logged_in')){
			redirect('home', 'refresh');
		}

		else{
			$this->load->view('login/login_view');
		}
	}

}