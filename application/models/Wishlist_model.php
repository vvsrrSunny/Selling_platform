<?php
class Wishlist_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	
	}
    
	public function wishlisthere() {
		
		// $search="abc@abc";
		// $query = $this->db->query("SELECT * FROM wishlist join items where wishlist.user_email='%$search%' and wishlist.itemid=items.itemid");
		// $mylists=$query;
		$this->db->select('*');
        $this->db->from('items');
		$this->db->join('wishlist', 'items.itemid = wishlist.itemid');
		$email=$_SESSION["email"];
		$this->db->where(array('wishlist.user_email' => $email));
		$query = $this->db->get();
		$mylists=$query;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res1'][]=$a;
        }
    }
    if(isset($data['res1']))
		return $data;
	else
	{
		$data="";
		return $data;
	}

	}

	public function removehere($id) {
		$this->db->delete('wishlist', array('itemid' => $id)); 
	}
}