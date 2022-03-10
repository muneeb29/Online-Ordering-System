<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('logout');
		$this->load->view('footer');
	}
}
