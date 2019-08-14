<?php
$email=$_SESSION['email'];
?>
<center>
  <br>
  <h2>Provide new password</h2>
  <br>
  <form action="<?php echo base_url(); ?>SecretQuestion/resetPassword" method="post">
  
 
 <h3> Email : <?php echo $email?> </h3>
 <br>
  Password : 
  <input type="password" name="password" value="password">
  <br><br>
  <input type="submit" value="Submit">
</form> 

  </center>
</body>
</html>