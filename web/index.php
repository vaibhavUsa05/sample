<?php include '../connDB.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/index.css"> 
    <title>WorldShop</title>
</head>
<body>
   <nav class="navbar">  
 <span class="span">
<span class="line1"></span>
<span class="line2"></span>
<span class="line3"></span>
</span>
<div class="link">
    <a href="#">About</a>
    <a href="./signup.php">signup</a>
    <a href="./login.php">login</a>
   

    <div>
<div class="menu">
    <center><p style="color:purple;font-size:20px;padding-top:5px;">CHOOSE FROM</p></center>
    <a href="#"><button class="jeans">Jeans</button></a>
    <a href="#"><button class="tops">tops</button></a>
    <a href="#"><button class="shirts">shirts</button></a>
    <a href="#"><button class="balzzer">balzzer</button></a> 
    <a href="#"><button class="suits">suits</button></a>
</div>
</nav>
<div class="mainContent">
    <div class="cardMedia">
        <img src="../utilities/img1.jpeg" alt="" class="image" style=" height:60vh;
    width:100vw;
    object-fit:cover;
    opacity:0.8;
    position:relative;
    border:2px solid black;border-radius:8px;
">
        <span class="overView" style="
        z-index:2;
        font-weight:800;
        color:black;
        font-size:35px;
        position:relative;
        top:-50%;
        right:-20%;"
        >Your Hunger has came to the Right Place</span>
    </div>






</div>
</body>
<script src="../js/index.js"></script>
</html>