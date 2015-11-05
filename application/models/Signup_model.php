<?php
class Signup_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function signup($fName,$lName,$email,$password)
{
            $fName = $this->input->post('fName'); 
            $lName = $this->input->post('lName'); 
            $email = $this->input->post('email'); 
            $password = $this->input->post('pass'); 
            
            return array( 'fName' => $fName, 'lName' => $lName, 'email' => $email, 'pass' => $password); 
//            
            $insert = $this->db->insert('UserInformation'); 
            
//            if(isset($_POST['submit'])) {
//                
//                $this->load->helper('url');
//                redirect('profile');
//            }
            return $insert; 
//            $query = $this->db->get('UserInformation');
//            return $query->result_array();
        }
}

