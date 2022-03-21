<?php
	class Checkout_model extends CI_Model {
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

    public function getOrder($orderID){        
        $this->db->select("*");
        $this->db->from('order_menu');
        $this->db->where('orderid', $orderID);
        $query = $this->db->get(); 
        $data = $query->result();
        return $data; 
}

public function total($orderID){
            $this->db->select_sum('price');
            $this->db->from('order_menu');
            $this->db->where('orderid', $orderID);
            $query = $this->db->get(); 
            $data = $query->result();
            return $data; 
}

}