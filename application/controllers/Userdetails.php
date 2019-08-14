<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdetails extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query'] = "";
        $this->load->model('userdetails_model');
    }

    public function index() {
        $this->load->view('navf');
        //$this->load->view('login', $this->data);
        //$this->load->view('footer');
        $this->data['query'] =$this->userdetails_model->getdetails();
        $this->load->view('userdetails',$this->data);

    }
    public function editUser() {
        $this->load->view('navf');
        //$this->load->view('login', $this->data);
        //$this->load->view('footer');
        $this->data['query'] =$this->userdetails_model->getdetails();
        echo "this is t edit";
        $this->load->view('edituser',$this->data);

    }

}
