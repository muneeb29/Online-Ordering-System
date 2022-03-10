<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('checkout');
		$this->load->view('footer');
	}
}
