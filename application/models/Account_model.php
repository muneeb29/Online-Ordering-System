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

        public function updateAccount($customerid){   
                
                
        $data1 = array();
        $data2 = array();
        $data3 = array();
        $data4 = array();
        $data5 = array();

                if(!empty($this->input->post('firstname'))){
                        $firstname =  $this->input->post('firstname');
                        $data1 = array(
                            'firstname' => $firstname,
                        );
                    }

                    if(!empty($this->input->post('surname'))){
                        $surname =  $this->input->post('surname');
                        $data2 = array(
                            'surname' => $surname,
                        );
                    }

                    if(!empty($this->input->post('address'))){
                        $address =  $this->input->post('address');
                        $data3 = array(
                            'address' => $address,
                        );
                    }    

                    if(!empty($this->input->post('telephone'))){
                        $telephone =  $this->input->post('telephone');
                        $data4 = array(
                            'telephone' => $telephone,
                        );
                    }       
                
                    if(!empty($this->input->post('email'))){
                        $email =  $this->input->post('email');
                        $data5 = array(
                            'email' => $email,
                        );
                    }        
                
                    $data = array_merge($data1,$data2,$data3,$data4,$data5);
            
                    if (empty($data))
                    {
                    }
                    else
                    {
                        $this->db->where('customerid', $customerid);
                        $this->db->update('customer',$data);
                    }   
                    
               
                return $data;
            
        }       
	}
    ?>