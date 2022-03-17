<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Account_model');
	}

	public function index()
	{
		$this->load->view('navbar');
		$this->accountDetails();
		$this->load->view('footer');
		$this->updateDetails();
	}

	public function accountDetails(){


		$customerid = $this->Account_model->getCustID();
		
		$data['details'] = $this->Account_model->details($customerid);	

		$this->load->view('account',$data);
	}

	public function updateDetails(){

		if($this->input->post('Update')){
			$customerid = $this->Account_model->getCustID();
			$data['update'] = $this->Account_model->updateAccount($customerid);	
	
			}

	}
}
