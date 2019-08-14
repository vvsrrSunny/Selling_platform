<?php
class PricePay_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		
	}


public function getItemDetails($id){
	
	$query2 = $this->db->query("SELECT * FROM items where itemid = '$id'");
		$mylists=$query2;
		if ($mylists->num_rows()>0){

        foreach ($mylists->result() as $a)
        {
            $data['res'][]=$a;
        }
    }
		$data['id']=$id;

		return $data;
	}

	public function updateItem($id){
		 $soled=1;
    	//UPDATE `phpproject`.`items` SET `soled` = '1' WHERE (`itemid` = '16');
		$updateQuery="UPDATE items SET soled='$soled' WHERE (itemid='$id')";
        if ($this->db->query($updateQuery)=== TRUE)
                    return TRUE;
	}
}