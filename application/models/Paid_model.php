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

        public function newOrder($customerid){

            $status = "Unpaid";
            $data = array(
                'customerid'=>$customerid,
                'total' =>0,
                'status' => $status
            );
	
		$this->db->insert('orders',$data);
	}

    }


        ?>