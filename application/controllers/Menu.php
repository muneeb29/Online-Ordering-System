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
		
		$data = array();

		$data['starter'] = $this->Menu_model->allItems();		
		$data['main'] = $this->Menu_model->main();	
		$data['dessert'] = $this->Menu_model->dessert();	
		$data['drinks'] = $this->Menu_model->drinks();		
				

		$data['type'] = $this->Menu_model->menuItems($type);

		$data['types'] = $this->Menu_model->menuItems($dropType);


		
		$this->load->view('menu_options',$data);
		$this->load->view('menu',$data);

		
	}

	public function add(){
		if($this->session->userdata('user')){
		$menuid =  $this->input->post('menuid');
		$quantity =  $this->input->post('quantity');
		$price =  $this->input->post('price');
		$name =  $this->input->post('name');
		$orderid = $this->Menu_model->getOrderID();


		$data['updateAll'] = $this->Menu_model->add($menuid, $quantity, $price, $orderid, $name);
		}
		else{
			
			
			
		}
	
			
	}
}
