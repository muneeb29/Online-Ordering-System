<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('menu');
		$this->load->view('footer');
	}
}
