<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additem extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['query2']="";
        $this->load->model('additem_model');

    }

    public function index() {
        if (isset($_SESSION["email"])) 
        $this->load->view('additem',$this->data);

        
    }
    public function additemhere() {
        $file   =$_FILES['image']['tmp_name'];
    if(!isset($file))
    {
      $this->data['query2']='Please select an Image and should break here';
    }
    else 
    {
        $image_check = getimagesize($_FILES['image']['tmp_name']);
       if($image_check==false)
       {
        $this->data['query2']='Not a Valid Image';
       }
       else
       {

        $name=$this->input->post('name');
        $type=$this->input->post('type');
        $price=$this->input->post('price');
        $description=$this->input->post('description');
        $email = $_SESSION["email"];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
        
        $this->data['query2']=$this->additem_model->additemtodb($name, $type,$price,$description,$email,$image);
       }
       
    }
        //$this->load->view('footer');
    $this->load->view('additem', $this->data);
    }
    
    
}

    