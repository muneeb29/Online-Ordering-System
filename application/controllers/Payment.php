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
		$orderID = $this->Payment_model->getOrderID();
		$custID = $this->Payment_model->getCustID();
		$data['total'] = $this->Payment_model->totalOrder($orderID);
		$total = $this->Payment_model->totalOrder($orderID);

		if($this->input->post('pay')){
			$data['paid'] = $this->Payment_model->payment($orderID, $custID, $total);
			
		}

		$this->load->view('payment');
	}
}


