
<table border=1 frame=hslides rules=rows style="width:100%">
<?php

 if (isset($query['res2'])) {

	echo "<h2 style='margin-left: 10%'>All items matching your search content!</h2>";	
	}
	else
			echo "<h2 style='margin-left: 10%'>Buy Here !</h2>";

		$itemids = array();
		$i=0;
		if(isset($query['list'])){
			foreach ($query['list'] as $row) {
				$itemids[$i]=$row->itemid;
				$i++;
			}	
		}
		
if(isset($query['res1'])){
foreach ($query['res1'] as $row) {
	if($row->soled==0){
	# code...
	if(isset($query['list'])){
		$k=0;
		for($j=0;$j<sizeof($itemids);$j++){
			if($itemids[$j]==$row->itemid)
				$k++;

		}
		if($k==0){
			echo "<tr>
    <td><img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:200px;height:100px;'></td>
    <td>item name: ".$row->itemname."<br>item price: ".$row->itemprice."$<br>item type: ".$row->itemtype."</td>
    <td>item description: ".$row->description." <br><a class='btn btn-primary btn-sm'href='".base_url()."Viewitem/viewItem/".$row->itemid."'>View</a><a class='btn btn-primary btn-sm'href='".base_url()."Buyitems/addwishlist/".$row->itemid."'>Add to list</a></td>
    
  </tr>";
		}
		else{
			echo "<tr>
    <td><img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:200px;height:100px;'></td>
    <td>item name: ".$row->itemname."<br>item price: ".$row->itemprice."$<br>item type: ".$row->itemtype."</td>
    <td>item description: ".$row->description." <br><a class='btn btn-primary btn-sm'href='".base_url()."Viewitem/viewItem/".$row->itemid."'>View</a></td>
    
  </tr>";
		}

	} else{
	echo "<tr>
    <td><img src='data:image/jepg;base64,".base64_encode( $row->image )."' alt='product image' style='width:200px;height:100px;'></td>
    <td>item name: ".$row->itemname."<br>item price: ".$row->itemprice."$<br>item type: ".$row->itemtype."</td>
    <td>item description: ".$row->description." <br><a class='btn btn-primary btn-sm'href='".base_url()."Viewitem/viewItem/".$row->itemid."'>View</a><a class='btn btn-primary btn-sm'href='".base_url()."Buyitems/addwishlist/".$row->itemid."'>Add to list</a></td>
    
  </tr>";
}

}
}


}
else
	echo "<h4>No search results found!</h4>"
?>

</body>
</html>