<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query']="";
        $this->load->model('wishlist_model');
        $this->data2['status'] = "";
    }

    public function index() {
        if (isset($_SESSION["email"])) {
        $this->load->view('navf');
        $this->data['query'] =$this->wishlist_model->wishlisthere();
        //echo "content here";
        $this->load->view('wishlist', $this->data);
        //$this->load->view('footer');
        }
        else
        {
            $this->load->view('navf');
        $this->load->view('login', $this->data2);
        }
    }
    public function removefromlist($id) {
    $this->wishlist_model->removehere($id);
        if (isset($_SESSION["email"])) {
        $this->load->view('navf');
        $this->data['query'] =$this->wishlist_model->wishlisthere();
        //echo "content here";
        $this->load->view('wishlist', $this->data);
        //$this->load->view('footer');
        }
        else
        {
            $this->load->view('navf');
        $this->load->view('login', $this->data2);
        }
    
    }
}

    