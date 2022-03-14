<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->load->model('Login_model');
	}


	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('login');
		$this->load->view('footer');
	
		$username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

		$data = $this->Login_model->login($username, $password);
		
		if($data){
			$this->session->set_userdata('user', $data);

			$session_id=$this->session->session_id;
			set_cookie('user', $session_id, 10000);
			redirect('home');
		}


	}
}
