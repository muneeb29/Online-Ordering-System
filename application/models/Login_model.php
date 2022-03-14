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

            $this->db->where('Password',$password);
			$query = $this->db->get(); 
            return $query->row_array();
        }
			

         
	}
    ?>