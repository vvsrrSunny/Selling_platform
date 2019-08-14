<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('register_model');
    }

    public function index() {
        $this->load->view('navf');
        $this->load->view('register', $this->data);
        // $this->load->view('footer');
    }

    public function register() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $name =$this->input->post('name');
        $phone= $this->input->post('phone');
        //$remember = $this->input->post('remember');

        if ($this->register_model->create($email, $password,$phone,$name)) {
            $_SESSION['email'] = $email;

            redirect(base_url(). "SecretQuestion/");
        } else {
            $this->data['status'] = "Your email or password is incorrect!";
            $this->index();
        }
        
    }
    
        public function registerUpdate() {
          $name =$this->input->post('name');
        $phone= $this->input->post('phone');  
        $email=$_SESSION['email'];
        if ($this->register_model->userUpdate($email,$name,$phone)) {
            //$_SESSION['email'] = $email;

            redirect(base_url(). "Userdetails/");
        } else {
            echo "details are wrong";
        }

}
}
