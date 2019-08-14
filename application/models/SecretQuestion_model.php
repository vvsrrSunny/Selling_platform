<?php
class SecretQuestion_model extends CI_Model {

	public function __construct() {
		$this->load->database();
        $this->load->library('bcrypt');
	}
    
	public function secretAnswer($email, $answer) {

		 $options = [
  'cost' => 11
];
                    $hash2=password_hash($answer, PASSWORD_BCRYPT, $options);
					$insertQuery= "INSERT INTO secret (email,answer) VALUES ('$email','$hash2')";
					
                if ($this->db->query($insertQuery)=== TRUE)
                	return TRUE;
	}





public function setPassword($email, $answer){
$this->db->where('email',$email);

    $result = $this->getUsers($answer,$email);

    if (!empty($result)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

public function getUsers($answer,$email) {
	$this->db->where('email',$email);
    $query = $this->db->get('secret');

    if ($query->num_rows() > 0) {
        $result = $query->row_array();
        //$hash= $this->bcrypt->hash_password($password);
        //echo $hash."  we are good to check ".$result['password']." check ".$hash2;
        $options = [
  'cost' => 11
];
        //$password="sunnysunny1";
        //echo password_hash('sunnysunny1', PASSWORD_BCRYPT, $options)."\n now this is from data base".$result['password'];
//         $hash2=password_hash('sunnysunny1', PASSWORD_BCRYPT, $options);
//         if (password_verify('sunnysunny1', $hash2)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }
        //$password= trim($password);
        //echo $password."  ".$result['password'];
        if (password_verify($answer, $result['answer'])){
            //We're good
            
            return $result;
        } else {
            //Wrong password
            echo "we are not good";
            return FALSE;
        }

    } else {
        return null;
    }
}

public function resetPasswordModel($email, $password){

	 $options = [
  'cost' => 11
];
                    $hash2=password_hash($password, PASSWORD_BCRYPT, $options);
                    $updateQuery= "UPDATE users SET password = '$hash2' WHERE(email='$email') ";
					
                if ($this->db->query($updateQuery)=== TRUE)
                	return TRUE;

				}

}