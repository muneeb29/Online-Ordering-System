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
	}

	public function accountDetails(){


		$customerid = $this->Account_model->getCustID();
		
		$data['details'] = $this->Account_model->details($customerid);	

		$this->load->view('account',$data);
	}
}
