<?php
	class Paid_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

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

    }

        ?>