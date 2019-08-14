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

 
			echo "<h2 style='margin-left: 10%'>Buy Here !</h2>";
			$id=$query['id'];


$i=0;
$a=0;
if (isset($query['res2'])) {
			foreach ($query['res2'] as $row) {
	if($row->ratings<1)
		$row->ratings="N/A";
	else
	{
		$a=$a+$row->ratings;
		$i=$i+1;
	}
}
if($i!=0)
$a=$a/$i;
}
else
	$a="N/A";


foreach ($query['res1'] as $row) {
	# code...
	echo "
    <img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:500px;height:300px;'>
    
    <p>item name: ".$row->itemname."<br><br>item price: ".$row->itemprice."$<br><br>item type: ".$row->itemtype."<br><br>Over all rating: ".$a." on scale of 5<br><br>
    item description: ".$row->description." <br>
    <a class='btn btn-primary btn-sm'href='".base_url()."PricePay/price/".$row->itemid."'>Buy Now!</a></p>";
}
?>
<br>
<hr>

<h3>Give ratings and reviews here</h3>

<?php 
if(isset($query['review'])){
	echo"<h4>".$query['review']."</h4>";
}
echo "
<form action='".base_url()."Viewitem/addreviews/".$id."' method='POST'>
        Give ratings here: <select name='ratings'>
    <option value='none'>none</option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
  </select><br><br>
        Give item review:
        <br>
         <textarea rows='4' cols='50' name='review'>
Review...</textarea><br>
        
    
    <input type='submit' />
</form>"?>
<br>

<br>
<hr>
<h3>All reviews!!</h3>

<?php
if (isset($query['res2'])) {
foreach ($query['res2'] as $row) {
	if($row->ratings<1)
		$row->ratings="N/A";
	
	# code...
	echo "<tr>
    <td>Item Reviewer : ".$row->user_email."<br><br>item rated as: ".$row->ratings."<br>item review: ".$row->reviews."</td>
    
  </tr>";
}
}
else
echo "<h5>no body reviewed yet</h5>"
?>
</body>
</html>