<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('cookie');

		$this->load->model('Login_model');
	}


	public function index()
	{	
		if($this->session->userdata('user')){
			redirect('home');
		}

		else{
			$this->layout();
		}
	}

	public function layout(){
		$this->load->view('navbar');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login(){
	
		$username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

		$data = $this->Login_model->login($username, $password);
		
		if($data){
			$this->session->set_userdata('user', $data);

			$session_id=$this->session->session_id;
			set_cookie('user', $session_id, 10000);
			redirect('home');
		}

		else{
			echo '<script>alert("Wrong details!")</script>';
			$this->index();
			$this->session->set_flashdata('error','Invalid login');
		} 
	}

	public function logout(){

		$this->session->unset_userdata('user');
		delete_cookie('user');
		$this->load->view('navbar');
		$this->load->view('logout');
		$this->load->view('footer');
	}
}
