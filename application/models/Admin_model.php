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
                'quantity' => $addQuantity,
                'price'=> $addPrice,
                'type'=> $addType,
            );

            $id = $this->db->insert('menu',$data);

            echo '<script> alert("Item Added!") </script>'; 

            redirect('Dashboard',3000);
            

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

        public function getOrderID(){
            $this->db->select("orderid");
            $this->db->from('orders');
            $query = $this->db->get(); 
            $data = $query->result();
            return $data;
        }

        public function getOrders(){
            $selectID = $this->input->post('ordName');

            $this->db->select("*");
            $this->db->from('order_menu');
            $this->db->where('orderid',$selectID);

            $query = $this->db->get(); 
            $data = $query->result();
           
            return $data;
        }


        public function getTotal(){
            $selectID = $this->input->post('ordName');

            $this->db->select("*");
            $this->db->from('orders');
            $this->db->where('orderid',$selectID);

            $query = $this->db->get(); 
            $data = $query->result();
           
            return $data;
        }

        public function getOrderItem(){
            $selectID = $this->input->post('orderedItems');

            $this->db->select("*");
            $this->db->from('order_menu');
            $this->db->where('orderid',$selectID);

            $query = $this->db->get(); 
            $data = $query->result();
           
            return $data;
        }


        public function getTotalItem(){
            $selectID = $this->input->post('orderedItems');

            $this->db->select("total");
            $this->db->from('orders');
            $this->db->where('orderid',$selectID);

            $query = $this->db->get(); 
            $data = $query->result();
           
            return $data;
        }
 

        public function getOrdered(){
            $status = "Ordered";

            $this->db->select("*");
            $this->db->from('orders');
            $this->db->where('status',$status);

            $query = $this->db->get(); 
            $data = $query->result();
           
            return $data;
        }

         

        public function completeOrder($selectID){
            $status = "Complete";
            $data = array(
                'status' => $status,  
            );
             
            $this->db->where("orderid = '$selectID'");
             $this->db->update('orders',$data);

        }

        public function cancelOrder($selectID){
            $status = "Cancelled";
            $data = array(
                'status' => $status,  
            );
             
            $this->db->where("orderid = '$selectID'");
             $this->db->update('orders',$data);

        }
			
			

         
	}
    ?>