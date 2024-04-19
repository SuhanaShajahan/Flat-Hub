<?php
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Login Form with Show Password</title>
    <style>
    body {
        background-color: #f35525;
        font-family: Arial, sans-serif;
    }
    
    .container {
        width: 300px;
        margin: 0 auto;
    }
    
    form {
        width: 600px;
        border: 2px solid #cccccc;
        padding: 60px;
        border-radius: 5px;
        font-size: 20px;
        background-color: #6d6b6b;
    }
    
    input[type="text"],
    input[type="password"] {
        width: 60%;
        padding: 5px;
        margin: 5px 0 20px 0;
        border: 3px solid #e20000;
        border-radius: 5px;
        box-sizing: border-box;
        font:white;
    }
    
    button {
        background-color: #030403;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 35%;
    }
    
    button:hover {
        background-color: #061507;
    }
    
    .show-password {
        margin-top: 10px;
        cursor: pointer;
        color: blue;
    }
    </style>
    <script>
    // function showPassword() {
    //     var passwordField = document.getElementById("password");
    //     if (passwordField.type === "password") {
    //         passwordField.type = "text";
    //     } else {
    //         passwordField.type = "password";
    //     }
    
    </script>
  

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>FlatHub</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="appartment.html">Appartment</a></li>
                      <!-- <li><a href="property-details.html">Property Details</a></li> -->
                      <li><a href="login.html"></i> Login</a></li>
                      <!-- <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li> -->
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <span class="breadcrumb"><a href="#">Home</a>  /  Contact Us</span> -->
          <h3>LogIn</h3>
        </div>
      </div>
    </div>
  </div>

 
  <br>
  <br>
  <br>
  <br>
  <br>

<center>
<div class="container">
<form method="post" action="loginact.php">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required="">
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required="">
      
      <button type="submit">Login</button>
      <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
</div></center>



  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        <a rel="nofollow" href="https://templatemo.com" target="_blank"></a> : <a href="https://themewagon.com"></a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>