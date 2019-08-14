<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/HomepageMiddlePart.css">
    <style>
      h1, h2{
    font-weight: 300;
    color: #8f0000; 
    
  }
  
body{
  background-color: #eefbff;
}
    </style>
  

<script type="text/javascript" src="js/home.js">
  
  </script>
  <!-- MDBootstrap -->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<script>
  var neededurl="<?php echo base_url();?>Papers";
    $.ajax({url: neededurl, success: function(result){
      $("#nav").html(result);
    }});
</script>
</head>
<body id="additembody">
    
    <div id="nav">
        
    </div>
<div style="margin-left:40%">
  
</style>
<br>
<?php if (strlen($query2) > 0): echo '<h3>' . $query2 . '</h3>'; endif?>
<br>
    <h2>Add Item here to sell</h2>
    <br>
    <form action="<?php echo base_url(); ?>Additem/additemhere" method="POST" enctype="multipart/form-data">
        Item name: <input type="text" name="name" required><br><br>
        Item type: <input type="text" name="type" required><br><br>
        Item price: <input type="text" name="price" required><br><br>
        <label>Product image: </label><input type="file" name="image" /><br><br>
          <textarea rows="4" cols="50" name="description">
Product description...</textarea><br><br>

    
    <input type="submit" />
</form>
</div>
</body>
</html>