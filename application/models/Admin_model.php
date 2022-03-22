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

            $data1 = array();
            $data2 = array();
            $data3 = array();
            $data4 = array();

            if(!empty($this->input->post('updateName'))){
                $updateName = $this->input->post('updateName');
                $data1 = array(
                    'name' => $updateName,
                );
            }

            if(!empty($this->input->post('updatePrice'))){
                $updatePrice = $this->input->post('updatePrice');
                $data2 = array(
                    'price' => $updatePrice,
                );
            }

            if(!empty($this->input->post('updateQuantity'))){
                $updateQuantity = $this->input->post('updateQuantity');
                $data3 = array(
                    'quantity' => $updateQuantity,
                );
            }

            if(!empty($this->input->post('updateType'))){
                $updateType = $this->input->post('updateType');
                $data4 = array(
                    'type' => $updateType,
                );
            }

            $data = array_merge($data1,$data2,$data3,$data4);
     
            if (empty($data)){
            }
            else{
            $this->db->where('menuid', $menuid);
            $this->db->update('menu',$data);
            }

            return $data;
        }

        public function deleteItems(){
            $name = $this->input->post('deleteItems');

            $this->db->where('name', $name);
            $this->db->delete('menu');
        }

 
			

         
	}
    ?>