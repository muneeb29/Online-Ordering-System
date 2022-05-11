<?php
	class Checkout_model extends CI_Model {
		public function __construct(){
			parent::__construct();
			$this->load->database();

		}

        public function getOrderID(){
            $customerid = $this->session->userdata('user');
            if($customerid !=null){
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
            else {
                return false;
            }

    }

    public function getOrder($orderID){        
        $this->db->select("*");
        $this->db->from('order_menu');
        $this->db->where('orderid', $orderID);
        $query = $this->db->get(); 
        $data = $query->result();
        return $data; 
}



    public function total($orderID){
                $this->db->select_sum('total');
                $this->db->from('order_menu');
                $this->db->where('orderid', $orderID);
                $query = $this->db->get(); 
                $data = $query->result();
                return $data; 
    }

    public function totalOrder($orderID){     
        $this->db->select_sum("total");
        $this->db->from("order_menu");
        $this->db->where("orderid = '$orderID'");
        $query = $this->db->get();
        $result = $query->result();
        

        $price='';
        foreach($result as $o){
            $price = $o->total;
        }
        return $price;
    

}

    public function updateQuantity($orderID, $menuid, $quantity, $price){
       
       $total = $price * $quantity;

        $data = array(
            'quantity' => $quantity,
            'total' => $total,
        );

        $this->db->where('orderid', $orderID);
        $this->db->where('menuid', $menuid);
        $this->db->update('order_menu',$data);
    }

    public function updateOrder($orderID, $total){
        $data = array(
            'total' => $total,
        );
        $this->db->where('orderid', $orderID);
        $this->db->update('orders',$data);
    }


    public function deleteProd($order_menuid){
      
      echo($order_menuid);
        $this->db->where('order_menuid', $order_menuid);
        $this->db->delete('order_menu');
    }
}