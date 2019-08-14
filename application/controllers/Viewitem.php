<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewitem extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query']="";
        $this->load->model('viewitem_model');
    }

    public function index() {
        
        
    }
     public function viewItem($id) {
        $this->load->view('navf');
        $this->data['query'] =$this->viewitem_model->viewitemshere($id);
        $this->load->view('viewitem', $this->data);
        
    }

    function addreviews($id)
    {
        $this->load->view('navf');
        $ratings=$this->input->post('ratings');
        $review=$this->input->post('review');
        $email=$_SESSION['email'];
        $this->data['query']=$this->viewitem_model->addreviews($id,$ratings,$review,$email);
        $this->load->view('viewitem', $this->data);
    }

    public function viewItemToBuy($id) {
        $this->load->view('navf');
        $this->data['query'] =$this->viewitem_model->viewitemshere($id);
        $this->load->view('pricePay', $this->data);
        
    }

}