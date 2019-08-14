<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/HomepageMiddlePart.css">







    


</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <!-- for buyitems table -->
     <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>

<!-- for buyitems table closed-->


   
    <style>
        
table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
  background-color: #e5eeea;
}


        
        
    </style>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/home.js">
      
    </script>
    <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
    <script>
      
        function myfunctionlogin(){
           location.href = "http://localhost/login.php";
    }
    </script>
<div class="navbarTop">
    <div class= "forPadding">
        <img src="<?php echo base_url(); ?>img/mainlogo.png" alt="company logo" width="50" height="40">

    </div>
  
  <a href="<?php echo base_url(); ?>Home">Our Company</a>
  
   <?php 
         if (isset($_SESSION["email"])) {
                echo '<a href="'.base_url().'Additem">Sell Now</a>';
                echo '<a href="'.base_url().'Buyitems">Buy Now</a>';
                echo '<a href="'.base_url().'Wishlist">Wish list</a>';
            } else {
                echo '<a href="'.base_url().'login">Sell Now</a>';
                echo '<a href="'.base_url().'login">Buy Now</a>';
                echo '<a href="'.base_url().'login">Wish list</a>';
            }
        ?>
 
  <!-- <a href="signup.php" id="regid">Register Here</a> -->
  <?php 
        
            if (isset($_SESSION["email"])) {
                ?>

                <a href="<?php echo base_url(); ?>Userdetails" id='regid'><?php echo "Welcome ".$_SESSION['email']." !"?></a>";
                <a class="btn btn-secondary btn-sm" id="loginb" href="<?php echo base_url(); ?>Login/logout" style="float: right;margin-top: 11px;">Log out</a>
                <?php
            } else {
                ?>
                <a href="<?php echo base_url(); ?>Register/" id="regid">Register Here</a>
                <a class="btn btn-secondary btn-sm" id="loginb" href="<?php echo base_url(); ?>Login/" style="float: right;margin-top: 11px;">Log in</a>
                <?php
            }
        ?>
  <!-- <a class="btn btn-secondary btn-sm" id="loginb" href="login.php" id="regid">Login</a> -->
  
  <input type="text" placeholder="Search.." class="search" onkeydown="search(this)">
  
</div>
<script type="text/javascript">
    function search(ele) {
    if(event.key === 'Enter') {
        //alert(ele.value);
        var search=   ele.value;
        var url="<?php echo base_url();?>Buyitems/search/";
        url=url+search;
        window.location.href = url;

    }
}
</script>
