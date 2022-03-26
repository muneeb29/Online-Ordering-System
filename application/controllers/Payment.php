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
		$orderID = $this->Payment_model->getOrderID();
		$total = $this->Payment_model->totalOrder($orderID);

		if($total > 0){
			$this->getPayment($orderID, $total);
		}

		else{
			redirect('menu');
		}
		
	}

	public function getPayment($orderID, $total){
		$custID = $this->Payment_model->getCustID();
		$data['total'] = $this->Payment_model->totalOrder($orderID);
		$cardNumber = $this->input->post('cardNumber');
		
		$cardNumber = $this->maskCard($cardNumber);
		$cardNumber = chunk_split($cardNumber, 4, ' ');

		if($this->input->post('pay')){
			$data['paid'] = $this->Payment_model->payment($orderID, $custID, $total, $cardNumber);
			redirect('Paid');
		}

		$this->load->view('navbar');
		$this->load->view('payment');
		$this->load->view('footer');
	}



function maskCard($cardNumber){
	return str_repeat("*",12) . substr($cardNumber, -4);
}

		
}


