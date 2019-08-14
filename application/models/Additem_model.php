<?php
class additem_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	public function additemtodb($name, $type,$price,$description,$email,$image) {
		$insertQuery= "INSERT INTO items (itemname, itemtype, itemprice, user_email, soled, description,image) VALUES ('$name', '$type', '$price','$email','0', '$description','{$image}')";
					
                if ($this->db->query($insertQuery)=== TRUE)
                	return "Item uploaded successfully";
                else
                	return "Item failed to uploaded, please wait for a while server might be busy";
	}
    
	
}