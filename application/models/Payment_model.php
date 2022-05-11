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
			$this->db->select_sum("total");
			$this->db->from("order_menu");
			$this->db->where("orderid = '$orderID'");
			$query = $this->db->get();
			$result = $query->result();
			

			$price='';
			foreach($result as $o){
				$price = $o->total;
			}
			return $price;
		

	}

	public function payment($orderID, $custID, $total, $cardNumber){

		$cardName = $this->input->post('cardName');
		$cardType = $this->input->post('cardType');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$csv = $this->input->post('csv');
		$day = 01; 
	
		$expiryDate = "$year/$month/$day";
		$expiry = date('Y-m-d', strtotime($expiryDate));

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

	public function ordered($orderID){
		$status = "Ordered";
	
		$data = array(
			'status' => $status,
		);
		
		$this->db->where("orderID = '$orderID'");
		$this->db->update('orders',$data);
	
		
	}

	public function checkStatus($orderID){
        $this->db->select("status");
        $this->db->from('orders');
        $this->db->where('orderid', $orderID);
		$query = $this->db->get();
		$result = $query->result();
		

		$status='';
		foreach($result as $o){
			$status = $o->status;
		}
		return $status;

      }







}