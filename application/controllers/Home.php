<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('nav');
        $this->load->view('home');
        $this->load->view('footer');
    }
}
