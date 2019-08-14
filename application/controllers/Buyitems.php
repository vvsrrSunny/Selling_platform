<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyitems extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query']="";
        $this->load->model('buyitems_model');
        $this->data2['status'] = "";
    }

    public function index() {
        if (isset($_SESSION["email"])) {
        $this->load->view('navf');
        $this->data['query'] =$this->buyitems_model->buyitemshere();
        //echo "content here";
        $this->load->view('buyitems', $this->data);
        //$this->load->view('footer');
        }
        else
        {
            $this->load->view('navf');
        $this->load->view('login', $this->data2);
        }
    }
    public function addwishlist($id) {
        
        $this->buyitems_model->addwishlisthere($id);
        $this->load->view('navf');
        $this->data['query'] =$this->buyitems_model->buyitemshere();
        //echo "content here";
        $this->load->view('buyitems', $this->data);
    }

    public function search($search) {
        $this->load->view('navf');
        $this->data['query'] =$this->buyitems_model->buyitemsheresearch($search);
        $this->load->view('buyitems', $this->data);
        //$this->load->view('footer');
    }
}

    