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

		if($this->input->post('next')){
			$session_id=$this->session->session_id;
			set_cookie('user', $session_id, 10000);
			$customerid = $this->Paid_model->getCustID();
	
			$data['newod'] = $this->Paid_model->newOrder($customerid);

			 redirect('home');
			}	

		$this->load->view('navbar');
        $this->load->view('paid',$data);
		$this->load->view('footer');
	}


}
