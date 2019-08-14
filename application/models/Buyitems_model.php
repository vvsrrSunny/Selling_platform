<?php
class buyitems_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
    
	public function buyitemshere() {
		// $query = $this->db->get_where("users", array('email' => $email));
		//echo $search;
		//return $this->db->get('items')->result();
		$mylists=$this->db->get('items');
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
    }
        $email=$_SESSION["email"];
        $query2 = $this->db->query("SELECT itemid FROM wishlist where user_email = '$email'");

		$mylists2=$query2;
		if ($mylists2->num_rows()>0){
		foreach ($mylists2->result() as $a)
        {
            $data['list'][]=$a;
        }
    }
		return $data;

	}

	public function addwishlisthere($id) {
		$email=$_SESSION["email"];
	$query = $this->db->query("INSERT INTO wishlist (user_email, itemid)VALUES ('$email', '$id')");
	
                	
	}

	public function buyitemsheresearch($search) {
		// $query = $this->db->get_where("users", array('email' => $email));
		//echo $search;
		
		$query = $this->db->query("SELECT * FROM items where itemname LIKE '%$search%' OR itemtype LIKE '%$search%'");
		$mylists=$query;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
    }
    $data['res2']="search";
		return $data;
		return $data;

	}
}