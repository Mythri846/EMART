<?php
    @include 'config.php';
    session_start();
    if(!isset($_SESSION['user_name'])){
        header('location:signup.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-mart</title>

        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        
    
<header class ="header">

<a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>E-mart</a>
<nav class="navbar">
    <a href="#">Home</a>
    <a href="http://localhost/Emart/project2.html">Features</a>
    <a href="http://localhost/Emart/contact.html">Contact us</a>
    <a href="http://localhost/Emart/about.html">About us</a>
    <a href="http://localhost/Emart/reviews.html">Reviews</a>  
</nav>


<div class="icons">
    <div class ="fa fa-search" id="search-btn"></div>
    <a href="http://localhost/Emart/cart.html"><div class ="fa fa-shopping-cart" id="cart-btn"></div></a>
    <button class="btn-1"><a href="signup.php">Log Out</a></button>
</div>


<form class="search-form">
<input type="search" id="search-box" placeholder="Search Here...">
<label for="search-box" class="fa fa-search"></label>
</form>





</header>
<div class="background">
    <img src="grocery.jpeg" alt="img" style="width:100%">
    <div class="container">
    <div class="user-profile">
       </div>
        
     <div class="start">
                <h1 style= "color:alicewhite; font-weight:bold; font-size:40px;">Welcome<span style="text-decoration:underline;margin-left:15px;"><?php echo $_SESSION['user_name']?></span></h1>
                  BUY BEST PRODUCTS 
        <br>IN ONLINE</div>
    


</div>

<script src="script.js"></script>


    </body>
</html>
