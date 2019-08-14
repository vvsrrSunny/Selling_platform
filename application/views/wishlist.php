
<table border=1 frame=hslides rules=rows style="width:100%">
<?php

 
			echo "<h2 style='margin-left: 10%'>Your wish list here</h2>";
		

if(isset($query['res1'])){


foreach ($query['res1'] as $row) {
	# code...
	echo "<tr>
    <td><img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:200px;height:100px;'></td>
    <td>item name: ".$row->itemname."<br>item price: ".$row->itemprice."$<br>item type: ".$row->itemtype."</td>
    <td>item description: ".$row->description." <br><a class='btn btn-primary btn-sm'href='".base_url()."Viewitem/viewItem/".$row->itemid."'>View</a><a class='btn btn-primary btn-sm'href='".base_url()."Wishlist/removefromlist/".$row->itemid."'>Remove!</a></td>
    
  </tr>";
}
}
else
	echo "<h4>No items were added to wish list!</h4>";
?>

</body>
</html>