<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->model('Menu_model');
	}

	public function index()
	{
		$this->load->view('navbar');
		$this->menu(); 
		$this->load->view('footer');

	}

	public function menu(){
		$type =  $this->input->post('searchMenu');
		$dropType =  $this->input->post('dropType');
		$all = "All Items";
		
		set_cookie('ID', $type, 100);
		set_cookie('ID', $dropType, 100);
		set_cookie('ID', $all, 100);
		
		$data = array();

		$data['starter'] = $this->Menu_model->allItems();		
		$data['main'] = $this->Menu_model->main();	
		$data['dessert'] = $this->Menu_model->dessert();	
		$data['drinks'] = $this->Menu_model->drinks();		
				

		$data['type'] = $this->Menu_model->menuItems($type);

		$data['types'] = $this->Menu_model->menuItems($dropType);
		

		$this->load->view('menu',$data);

		$this->add();
	}

	public function add(){
		$addCart =  $this->input->post('addc');
		$quantity =  $this->input->post('quantity');

		if($this->input->post('add')){
			$data['updateAll'] = $this->Menu_model->add($addCart, $quantity);

	
			}
	}
}
