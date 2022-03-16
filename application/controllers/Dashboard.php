<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Menu_model');
	}

	public function index()
	{
		if($this->session->userdata('user')){
			redirect('home');
		}
		else if($this->session->userdata('admin')){
			$this->dashboard(); 
		}

		else{
			redirect('login');
		}
		

	}

    public function dashboard(){
		$this->load->view('navbar');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

}
?>