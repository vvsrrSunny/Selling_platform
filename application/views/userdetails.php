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
	<h2>User Details</h2>
	<br>
	<h3> Name : <?php echo $name?> </h3>
	<h3> Email : <?php echo $email?></h3>
	<h3> Phone number : <?php echo $phoneNo?></h3>
	<h3>Is account active : <?php echo 
	$accountActive ?></h3> 
	<?php
	echo "<a class='btn btn-primary btn-sm'href='".base_url()."Userdetails/editUser'>Edit!</a>";
	?>
	</center>
</body>
</html>