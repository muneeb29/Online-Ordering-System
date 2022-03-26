<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paid extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
        $this->load->model('Paid_model');
	}

	public function index()
	{
        $data['order'] = $this->Paid_model->getOrderID();

		$this->load->view('navbar');
        $this->load->view('paid',$data);
		$this->load->view('footer');
	}


}
