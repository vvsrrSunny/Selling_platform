<?php
if(isset($query['res1'])){
	foreach ($query['res1'] as $row) {
	$email= $row->email;
	$name=$row->name;
	$phoneNo=$row->phone;
	if($row->active==1)
        		$accountActive="yes";
        	else
        		$accountActive="No";
	}

}?>
<center>
	<br>
	<h2>User Details </h2>
	<br>
	<form action="<?php echo base_url(); ?>Register/registerUpdate" method="post">
  First name:
  <input type="text" name="name" value="<?php echo $name; ?>">
  <br><br>
  Last name : 
  <input type="text" name="lastname" value="<?php echo $name; ?>">
   <br><br>
  Phonenumber : 
  <input type="text" name="phone" value="<?php echo $phoneNo; ?>">
  <br><br>
  <input type="submit" value="Submit">
</form> 

	</center>
</body>
</html>