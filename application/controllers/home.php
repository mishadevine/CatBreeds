<?php
class Home extends CI_Controller {

    
        
public function __construct(){
            parent::__construct();
            // Your own constructor code
    
            //$this->load->model("users");
          //load the login model
          $this->load->model('Login_model');

}
    
    
public function index(){
    $this->load->view("header");
    $this->load->view("pages/index");
    $this->load->view("footer");
}
        
    
public function signup(){
    
    $this->load->view("header");
    $this->load->view("pages/signup");
    $this->load->view("footer");
}

public function signup_action(){
        var_dump($_POST);
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

//    $result = $this->Signup_model->signup($fName,$lName,$email,$password);

//        if ($fName && $lName && $email && $password == true) {
//            
//            $this->load->helper('url');
//            redirect('profile');
//        }

//    var_dump($result);

}
    
public function login(){
//    $get_user_info = new get_user_info();
    
    $this->load->view("header");
    $this->load->view("pages/login");
    $this->load->view("footer");
    
    
}

    
public function login_action(){
//    var_dump($_POST);
$email = $_POST['email'];
$password = $_POST['pass'];

$result = $this->Login_model->login($email,$password);

    if ($email && $password == true) {
        $this->load->helper('url');
        redirect('pages/profile');
    }

var_dump($result);

}
    
    
public function profile() {
        
    $this->load->view("header");
    $this->load->view("pages/profile");
    $this->load->view("footer"); 
        
}
    
}
?>