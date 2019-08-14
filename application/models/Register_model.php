<?php
class Register_model extends CI_Model {

	public function __construct() {
		$this->load->database();
        $this->load->library('bcrypt');
	}
    
	public function create2($email, $password,$phone,$name) {

		// $query = $this->db->get_where("users", array('email' => $email));
		$query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
		
		$row = $query->row_array();

		if (isset($row)) {
			return ($password == $row['password']);
		} else {
			return FALSE;
		}

	}
    public function userUpdate($email,$name,$phone) {

        // UPDATE `phpproject`.`users` SET `name` = 'sun', `phone` = '+617264822' WHERE (`email` = 'abc@abc');
        //     $insertQuery= "INSERT INTO users (name, phone, email, active, password) VALUES ('$name', '$phone', '$email', 1, '$password')";
        $insertQuery="UPDATE users SET name='$name' , phone='$phone' WHERE (email='$email')";
        if ($this->db->query($insertQuery)=== TRUE)
                    return TRUE;

    }

	public function create($email, $password,$phone,$name) {
        if (isset($_SESSION["email"]))
        redirect(base_url(). "home/");

    if (isset($email) && isset($password) && isset($name)) {
        
        // insert in DB
        if(strlen($password) >= 8){
            if(!preg_match("#[0-9]+#", $password)){
               return "Password must include at least one number!";
            }
            else
            { 
                
                $query = $this->db->query("SELECT * FROM users WHERE email = '" . $email . "'");
                $row = $query->row_array();
                if (isset($row)) {
			  		return "user already exist!";
				}
				else
				{
                    
                    $hash= $this->bcrypt->hash_password($password);
                     $options = [
  'cost' => 11
];
                    $hash2=password_hash($password, PASSWORD_BCRYPT, $options);
					$insertQuery= "INSERT INTO users (name, phone, email, active, password) VALUES ('$name', '$phone', '$email', 1, '$hash2')";
					
                if ($this->db->query($insertQuery)=== TRUE)
                	return TRUE;

				}

            }
        }
        else
        {
            return "password length is too small";

        }

    }
    else
    	return "Please fill the fields in the registration";

    }
}