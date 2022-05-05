<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returns extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('returns');
		$this->load->view('footer');
	}
}
