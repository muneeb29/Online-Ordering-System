<?php
	class Menu_model extends CI_Model {
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

        public function add($menuid,$quantity, $price, $orderid, $name){
           
            $total = $quantity * $price;
            $data = array(
                'orderid' => $orderid,
                'menuid' => $menuid,
                'name' => $name,
                'quantity' => $quantity,
                'price' => $total,
      
            );

            $id = $this->db->insert('order_menu',$data);
        }
	}

    ?>
