<?php
class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->load->library('bcrypt');
	}
    
// 	public function authenticate($email, $password) {
// 		$query = $this->db->get_where("users", array('email' => $email));
// 		$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
		
// 		$row = $query->row_array();

// 		if (isset($row)) {
// 			return ($password == $row['password']);
// 		} else {
// 			return FALSE;
// 		}
// }
	public function authenticate($email, $password) {
		$this->db->where('email',$email);

    $result = $this->getUsers($password,$email);

    if (!empty($result)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getUsers($password,$email) {
	$this->db->where('email',$email);
    $query = $this->db->get('users');

    if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $hash= $this->bcrypt->hash_password($password);
        //echo $hash."  we are good to check ".$result['password']." check ".$hash2;
        $options = [
  'cost' => 11
];
        
        if (password_verify($password, $result['password'])){
        
            return $result;
        } else {
            //Wrong password
            
            return FALSE;
        }

    } else {
        return null;
    }
}



}