<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PricePay extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query']="";
        $this->load->model('PricePay_model');
        //$this->load->model('viewitem_model');
    }
     public function index() {
        
        
    }
    public function price($id) {
        $this->load->view('navf');
         $this->data['query'] =$this->PricePay_model->getItemDetails($id);
          $this->load->view('pricePay',$this->data);
    }
    public function soled($id)
    {
    	
    	if($this->PricePay_model->updateItem($id)){
    		redirect(base_url(). "Buyitems/");
    	}
    }
}