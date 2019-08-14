<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('users_model');
    }

    public function index() {
        $this->load->view('navf');
        $this->load->view('login', $this->data);
        //$this->load->view('footer');
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');

        if ($remember) {
            setcookie("email", $_POST["email"], time() + 60*60*24, "/");            
        } else {
            delete_cookie('email');
        }

        if ($this->users_model->authenticate($email, $password)) {
            $_SESSION['email'] = $email;

            redirect(base_url(). "home/");
        } else {
            $this->data['status'] = "Your email or password is incorrect!";
           // redirect(base_url(). "Login/");
            $this->index();
        }
        
    }

    public function logout() {
        session_destroy();
        redirect(base_url() . "home/");
    }
}
