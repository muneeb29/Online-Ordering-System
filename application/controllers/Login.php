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
		else if($this->session->userdata('admin')){
			redirect('dashboard');
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

		$pass = sha1($password);

		$data = $this->Login_model->login($username, $pass);

		$admin = $this->Login_model->checkAdmin($username, $password);

		if($admin){
			$this->session->set_userdata('admin', $admin);
			$session_id=$this->session->session_id;
			set_cookie('admin', $session_id, 10000);
			redirect('adminhome');
			
		}

		else if($data){
			$this->session->set_userdata('user', $data);

			$session_id=$this->session->session_id;
			set_cookie('user', $session_id, 10000);
			$customerid = $this->Login_model->getCustID();
			$data = $this->Login_model->orders($customerid);
	
			redirect('home');
		}

		else{
			echo '<script>alert("Wrong details!")</script>';
			$this->index();
			$this->session->set_flashdata('error','Invalid login');
		} 
	}

		public function adminhome(){
			if($this->session->userdata('admin')){
				redirect('dashboard');
			}
			else{
				redirect('login');
			}
	 
		}
	

	public function logout(){

		$this->session->unset_userdata('user');
		delete_cookie('user');
		$this->load->view('navbar');
		$this->load->view('logout');
		$this->load->view('footer');
	}

	public function adminlogout(){
		$this->session->unset_userdata('admin');
		delete_cookie('admin');
		$this->load->view('navbar');
		$this->load->view('logout');
		$this->load->view('footer');
	}
}
