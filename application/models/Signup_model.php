<?php
    class Signup_model extends CI_Model {
    
        public function __construct(){
            $this->load->database();
        }

        public function getUser($password)
        {
        $data='';
      
            if($this->input->post('submit')){
            $firstname = $this->input->post('firstname');
            $surname = $this->input->post('surname');
            $address = $this->input->post('address');
            $telephone = $this->input->post('telephone');
            $email = $this->input->post('email');
            $type = "user";

          
            $datai = array(
                'firstname' => $firstname,
                'surname' => $surname,
                'address'=> $address,
                'telephone'=> $telephone,
                'email'=> $email,
                'type' => $type,
                'password' => $password,
            
            );

        $username = $this->input->post('username');
        $exists = $this->db->get_where('customer', array('username' => $username));
      
        if($exists->num_rows() == 0 ){
            $datau = array(
                'username' => $username,
            );

            $data = array_merge($datai, $datau);   
            $id = $this->db->insert('customer',$data);

        }

        else{
         
            echo '<script>alert("Username already exists!")</script>'; 
            return false;
        }
    }

    return $data;

    }



    }
    ?>