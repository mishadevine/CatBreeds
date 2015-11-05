<?php
class Login_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function login($email, $password)
{

            $this->db->select('email,pass');
            $this->db->from('UserInformation');
            $this->db->where('email', $email);
            $this->db->where('pass', $password);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
          
        }
    
}



?>