<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('delivery');
		$this->load->view('footer');
	}
}
