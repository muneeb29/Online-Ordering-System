<?php
	class Payment_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function getCustID(){
			$customerid = $this->session->userdata('user');
			extract($customerid);
		  
			$this->db->select("customerid");
			$this->db->from("customer");
			$this->db->where("username = '$username'");
			$query = $this->db->get();
			$result = $query->result();
			
	
			$customerid='';
			foreach($result as $o){
				$customerid = $o->customerid;
			}
			return $customerid;
		
	}

		public function getOrderID(){
            $customerid = $this->session->userdata('user');
            extract($customerid);
          
            $this->db->select("orderid");
            $this->db->from("orders");
            $this->db->where("customerid = '$customerid'");
            $query = $this->db->get();
            $result = $query->result();
            
    
            $orderid='';
            foreach($result as $o){
                $orderid = $o->orderid;
            }
            return $orderid;
        

    }

		public function totalOrder($orderID){     
			$this->db->select_sum("price");
			$this->db->from("order_menu");
			$this->db->where("orderid = '$orderID'");
			$query = $this->db->get();
			$result = $query->result();
			

			$price='';
			foreach($result as $o){
				$price = $o->price;
			}
			return $price;
		

	}

	public function payment($orderID, $custID, $total){
		var_dump($orderID, $custID, $total);

		$cardName = $this->input->post('cardName');
		$cardNumber = $this->input->post('cardNumber');
		$cardType = $this->input->post('cardType');
		$expiry = $this->input->post('expiry');
		$csv = $this->input->post('csv');

		$data = array(
			'customerid' => $custID,
			'orderid' => $orderID,
			'card_num'=> $cardNumber,
			'csv'=> $csv,
			'exp_date'=> $expiry,
			'amount' => $total,
			'type' => $cardType,
		
		);

		$this->db->insert('payment',$data);
		
	}





}