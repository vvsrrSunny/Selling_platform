<style>
p {
    margin-top: 0;
    margin-bottom: 1rem;
    position: absolute;
    left: 40%;
    top: 16%;
}	
</style>


<table border=1 frame=hslides rules=rows style="width:100%">
<?php

 
			echo "<h2 style='margin-left: 10%'>Make payment here !</h2>";
			$id=$query['id'];
            $itemname="car";
            $itemtype="vehicle";
            $itemprice="3000";
            $description="its good now";




foreach ($query['res'] as $row) {
	# code...
	echo "<img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:500px;height:300px;'>
    
    <p>item name: ".$row->itemname."<br><br>item price: ".$row->itemprice."$<br><br>item type: ".$row->itemtype."<br><br>
    item description: ".$row->description." <br><br>
    </p>
    ";
    $itemname=$row->itemname;
    $itemtype=$row->itemtype;
    $itemprice=$row->itemprice;
    $description=$row->description;
    
}
?>
<br>
<br><br>
<center>
<form action="<?php echo base_url(); ?>Pricepay/getpdf" method="post">
  Enter card number:
  <input type="text" name="name" value="">
  <br><br>
  Date and month  : 
  <input type="text" name="lastname" value="">
   <br><br>
  Enter CVV here  : 
  <input type="text" name="phone" value="">
  <input type="hidden" value="<?php echo $id; ?>" name="id" />
  <input type="hidden" value="<?php echo $itemname; ?>" name="itemname" />
  <input type="hidden" value="<?php echo $itemprice; ?>" name="itemprice" />
  <input type="hidden" value="<?php echo $itemtype; ?>" name="itemtype" />
  <input type="hidden" value="<?php echo $description; ?>" name="description" />
  <br><br>
  

</form> 
<button onclick="myFunction()">Make payment</button>
</center>   

<script>
  function myFunction(){
  var doc = new jsPDF();
itemname="item name : ";
  itemname=itemname+"<?php echo $itemname ?>";
  itemprice="item price : ";
  itemprice=itemprice+"<?php echo $itemprice ?>";
  itemtype="item type  : ";
  itemtype=itemtype+"<?php echo $itemtype ?>";
  description="item description  : ";
  description=description+"<?php echo $description ?>";
  email="This item soled to : ";
  <?php 
    $email= $_SESSION['email'] ;
   ?>
  email=email+"<?php echo $email?>";

  content=itemname+"\n\n"+itemprice+"\n\n"+itemtype+"\n\n"+description+"\n\n"+email;
doc.text(content, 10, 10);
doc.save('receipt.pdf');
var url="<?php echo base_url();?>Pricepay/soled/";
    url=url+"<?php echo $id ?>";
        window.location.href = url;

}
</script>

</body>
</html>