<?php
class Userdetails_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
    
	public function getdetails() {
		// $query = $this->db->get_where("users", array('email' => $email));
		$email=$_SESSION["email"];
		$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
		$mylists=$query;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
        return $data;
    }


	}
}