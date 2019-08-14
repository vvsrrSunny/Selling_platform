<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecretQuestion extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('SecretQuestion_model');
    }
    public function index() {
        $this->load->view('navf');
        $this->load->view('secretQuestion');
        
    }
    public function updateSecretQuestion()
    {
    	$this->load->view('navf');
    	$answer =$this->input->post('answer');
    	$email=$_SESSION['email'];
        if ($this->SecretQuestion_model->secretAnswer($email, $answer))
        {
        	redirect(base_url(). "Home/");
        }
        else
            redirect(base_url(). "Register/");
        
    }
    public function forgotPassword()
    {
    	$this->load->view('navf');
        $this->load->view('password');	
    }

public function updatePassword()
    {
    	$answer =$this->input->post('answer');
    	$email =$this->input->post('email');
    	if ($this->SecretQuestion_model->setPassword($email, $answer))
        {
        	// if answer is right
        	$_SESSION['email'] = $email;
        	redirect(base_url(). "SecretQuestion/givepassword");
        }
        else
            redirect(base_url(). "Login/");

    }

public function givepassword(){

	$this->load->view('navf');
        $this->load->view('givepassword');	
}    


public function resetpassword(){
	$password =$this->input->post('password');
	$email = $_SESSION['email'];
	if ($this->SecretQuestion_model->resetPasswordModel($email, $password))
        {
        	
        	redirect(base_url(). "Home");
        }
	}

}