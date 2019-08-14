<?php
$name="At which place you have born?";
?>
<center>
  <br>
  <h2>Security question</h2>
  <br>
  <form action="<?php echo base_url(); ?>SecretQuestion/updateSecretQuestion" method="post">
  <h3> Name : <?php echo $name?> </h3>
  <br>
 
  Answer : 
  <input type="text" name="answer" value="Answer here">
  <br><br>
  <input type="submit" value="Submit">
</form> 

  </center>
</body>
</html>