<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('register');
		$this->load->view('footer');
	}
}
