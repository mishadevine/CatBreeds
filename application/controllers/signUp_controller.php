<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignUp_Controller extends CI_Controller {

        public function __construct() {
            
        parent::__construct();
            
        }
        
        public function signup() {
            $this->load->helper(array('form'));
            $this->load->view('signup');
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fName', 'Name', 'trim|required');
            
            if($this->form_validation->run() == FALSE) { 
            //not validated - reload the view and display errors 
            $this->load->view('signup'); 
            
            } else { 
                $this->load->database();
            //load users_mode defined in modes/uses_model.php 
            $this->load->model('Signup_model'); 
            //create user 
            $this->Signup_model->signup(); 
                                                 
            }
        }

}


?>