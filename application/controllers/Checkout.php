<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Checkout_model');
	}

	public function index()
	{
		$this->load->view('navbar');
		$this->getOrder();
		$this->load->view('footer');
	}

	public function getOrder(){
		$orderID = $this->Checkout_model->getOrderID();
		
		$data['order'] = $this->Checkout_model->getOrder($orderID);
		$data['total'] = $this->Checkout_model->total($orderID);

		$data['to'] = $this->Checkout_model->totalOrder($orderID);
		$total = $this->Checkout_model->totalOrder($orderID);

		$data['update'] = $this->Checkout_model->updateOrder($orderID, $total);

		$this->load->view('checkout',$data);
	}
}
