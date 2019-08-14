<?php
class viewitem_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}


public function viewitemshere($id) {
		// $query = $this->db->get_where("users", array('email' => $email));
		//echo $search;
		
		$query = $this->db->query("SELECT * FROM items where itemid = '$id'");
		$mylists=$query;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
    }
		$data['id']=$id;


		$query2 = $this->db->query("SELECT * FROM reviews where itemid = '$id'");
		$mylists2=$query2;
		if ($mylists2->num_rows()>0){

        foreach ($mylists2->result() as $a)
        {
            $data['res2'][]=$a;
        }
    }

		return $data;

	}
	public function addreviews($id,$ratings,$review,$email) {
		if($ratings=="none")
		{
			$ratings="-2";
		}
		$insertQuery = "INSERT INTO reviews(itemid, reviews, user_email, ratings)VALUES ('$id','$review', '$email', '$ratings')";
			if ($this->db->query($insertQuery)=== TRUE)
				$data['review']="your review added successfully";
			else 
				$data['review']="faild to take your review";

			$query = $this->db->query("SELECT * FROM items where itemid = '$id'");
		$mylists=$query;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
    }
		$data['id']=$id;   


		$query2 = $this->db->query("SELECT * FROM reviews where itemid = '$id'");
		$mylists2=$query2;
		if ($mylists2->num_rows()>0){

        foreach ($mylists2->result() as $a)
        {
            $data['res2'][]=$a;
        }
    }
     	
		return $data;
	}
}
?>