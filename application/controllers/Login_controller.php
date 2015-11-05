<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function login()
 {
   $this->load->helper(array('form'));
   $this->load->view('login');
 }

}


?>