<?php
	class Admin_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

        public function menuItems(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

 
			

         
	}
    ?>