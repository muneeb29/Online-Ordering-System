<?php
	class Account_model extends CI_Model {
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

        public function details($customerid){        
                $this->db->select("*");
                $this->db->from('customer');
                $this->db->where('customerid', $customerid);
                $query = $this->db->get(); 
                $data = $query->result();
                return $data;
            
        }
			

         
	}
    ?>