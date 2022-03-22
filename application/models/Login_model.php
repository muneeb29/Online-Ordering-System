<?php
	class Login_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

        public function login($username, $password){

			$this->db->select("*");

			$this->db->from('customer');

            $this->db->where('username',$username);

            
			$query = $this->db->get(); 
            $result =  $query->row_array();

			if (!empty($result) && password_verify($password, $result['password'])) {
				return $result;
	
			} else {
				return false;
			}
        }

		public function checkAdmin($username, $password){

			$query = $this->db->get_where('customer', array('username'=>$username, 'password'=>$password, 'type'=>'admin' ));
			return $query->row_array();
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

	public function orders($customerid){
		$data = array(
			'customerid'=>$customerid,
			'total' =>0
		);
	
		$this->db->insert('orders',$data);
	}
			

         
	}
    ?>