<?php
	class Menu_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

        public function allItems(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', "starter");
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }
        public function main(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', "main");
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }
        public function dessert(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', "dessert");
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function drinks(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', "drinks");
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function menuItems($type){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', $type);
            $this->db->or_where('name', $type);
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }


        public function menuDrop($dropType){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('type', $dropType);
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function add($addCart,$quantity){
            $orderid = "3";
            $data = array(
                'orderid' => $orderid,
                'menuid' => $addCart,
                'quantity' => $quantity,
      
            );

            $id = $this->db->insert('order_menu',$data);
        }
	}

    ?>
