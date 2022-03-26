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

		$data = array();
		$menuid = "";

		if($this->input->post('selectName')){
			
			$menuid = $this->Admin_model->selectItems();
			}

	
		set_cookie('menu', $menuid, 10);

		$data['menu'] = $this->Admin_model->menuItems($menuid);

		$data['mnu'] = $this->Admin_model->allItems();

		if($this->input->post('addItems')){
		$data['add'] = $this->Admin_model->addItems();
	
		}

		if($this->input->post('update')){
		$menuid = $this->input->cookie('menu',TRUE);
		$data['updated'] = $this->Admin_model->updateItems($menuid);
			}

		if($this->input->post('deleteName')){
			$data['delete'] = $this->Admin_model->deleteItems();
			redirect($this->uri->uri_string());
					}	
		
		$this->load->view('dashboard',$data);
		
	}

}
?>