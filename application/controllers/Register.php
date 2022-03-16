<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('Signup_model');


	}

	public function index()
	{
		if($this->session->userdata('user')){
			redirect('home');			
		}

		else{
		$this->load->view('navbar');
		$this->signedup();
		$this->load->view('footer');
		}
	}

	public function signedup(){

		$password = $this->input->post('password');
		$pass = sha1($password);
		$data = array();

		if($this->input->post('submit')){
			$data['AllUsers'] = $this->Signup_model->getUser($pass);
			redirect('login');
		}
		$this->load->view('register',$data);
		
	}
}
