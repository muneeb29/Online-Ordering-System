<?php
	class Admin_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

        public function menuItems($menuid){
          
            $this->db->select("*");
            $this->db->from('menu');
            $this->db->where('menuid',$menuid);
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function allItems(){
          
            $this->db->select("*");
            $this->db->from('menu');
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function selectItems(){
            $name = $this->input->post('searchName');
            $this->db->select("menuid");
            $this->db->from('menu');
            $this->db->where('name',$name);
            $query = $this->db->get(); 
            $data = $query->result();
           
            $menuid='';
            foreach($data as $o){
                $menuid = $o->menuid;
            }
            return $menuid;
        }

        public function addItems(){
            $addName = $this->input->post('addName');
            $addPrice = $this->input->post('addPrice');
            $addQuantity = $this->input->post('addQuantity');
            $addType = $this->input->post('addType');

            $data = array(
                'name' => $addName,
                'quantity' => $addPrice,
                'price'=> $addQuantity,
                'type'=> $addType,
            );

            $id = $this->db->insert('menu',$data);
            return $data;
        }

        public function updateItems($menuid){
            $updateName = $this->input->post('updateName');
            $updatePrice = $this->input->post('updatePrice');
            $updateQuantity = $this->input->post('updateQuantity');
            $updateType = $this->input->post('updateType');

            $data = array(
                'name' => $updateName,
                'price' => $updatePrice,
                'quantity'=> $updateQuantity,
                'type'=> $updateType,
            );

            $this->db->where('menuid', $menuid);
            $this->db->update('menu',$data);

            return $data;
        }

        public function deleteItems(){
            $name = $this->input->post('deleteItems');

            $this->db->where('name', $name);
            $this->db->delete('menu');
        }

 
			

         
	}
    ?>