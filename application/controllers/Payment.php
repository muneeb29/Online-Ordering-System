<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Payment_model');
	}

	public function index()
	{
		$this->load->view('navbar');
		$this->getPayment();
		$this->load->view('footer');
	}

	public function getPayment(){
		$this->load->view('payment');
	}
}
