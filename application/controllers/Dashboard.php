<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Admin_model');
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
		$this->editMenu(); 
		$this->load->view('footer');
	}

	public function editMenu(){
		$data['menu'] = $this->Admin_model->menuItems();
		
		$this->load->view('dashboard',$data);
		
	}

}
?>