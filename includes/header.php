<!DOCTYPE html>
<html>
<head>
<title>Gloss and Blush</title>
<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='./css/raleway.css' rel='stylesheet' type='text/css'>
<link href='./css/arimo.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
    />
<script src="./js/jquery.min.js"></script>
<script src="./js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="./css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="./js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<?php
session_start();
?>
<!--header-->
<div class="header">
   <div class="container" style='margin: 0 auto;float: none;'>
       <div class="main-header">
        <div class="carting">
          <?php if(isset($_SESSION['username'])) {?>
            <ul><li><a href="./functions/logout.php"> LOGOUT</a></li></ul>
          <?php } else{?>
         <ul><li><a href="login.php"> LOGIN</a></li></ul>
          <?php } ?>
         </div>
         <div class="carting">
          <?php if(isset($_SESSION['username'])) {?>
            <ul><li><a href="#"> WELCOME <?php echo $_SESSION['username'];?></a></li></ul>
          <?php } else{?>
         <ul><li><a href="signup.php"> SIGNUP</a></li></ul>
          <?php } ?>
         </div>
       <div class="logo">
         <h3><a href="index.html">Gloss and Blush</a></h3>
        </div>        
       <div class="box_1">         
         <a href="cart.html"><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="images/cart.png" alt=""/></h3></a>
         <p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>
       
       </div>
       
       <div class="clearfix"></div>
     </div>
        
        <!-- start header menu -->
    <ul class="megamenu skyblue">
      <li class="grid"><a href="index.php">Home</a></li>
      <li class="grid"><a href="index.php?id=2">Make ups</a></li>
      <li class="grid"><a href="index.php?id=3">Bath & Body</a></li>
      <li class="grid"><a href="index.php?id=4">Nails</a></li>
      <li class="grid"><a href="index.php?id=5">Hair</a></li>    
    </ul>        
    <div class="clearfix"></div>          
   </div>
     <div class="caption">
     <h1>FASHION AND CREATIVITY</h1>   
     <p>Sed dapibus est a lorem dictum, id dignissim lacus fermentum. Nulla ut nibh in libero maximus pretium
     Nunc vulputate vel tellus ac elementum. Duis nec tincidunt dolor, ac dictum eros.</p>
       </div>
</div>
<!--header-->