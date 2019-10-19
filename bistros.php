<!DOCTYPE html>
<html lang="en">
<head>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bistros</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<style>
      h4 {
        font-family: 'Lobster', cursive;
        font-size: 48px;
        color: white;
      }
    </style>
<style>
body {
  background-image: url("https://bistroonbridge.com/wp-content/uploads/OIHR970-e1522873047667.jpg");
  background-repeat: no-repeat;
}
</style>
</head>
<body>

<!-- NAV BAR -->

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><h4>Bistros</h4></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

Jacksonville, FL

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li> 
    </ul>
    1-800-123-4567
  </div> 
</nav>

<!-- HEADER -->

<div class="container" style="padding: 100px 0px 100px 0px">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-bottom: 100px;"><h1 style="color:white;">Voted Best New Restaurant in Jacksonville</h1></div>
        <div class="col-md-12 text-center"><button class="btn btn-light">Order Online</button></div>
    </div>
</div>

<!-- OUR MENUS -->
    
<div class="container">
  <div class="row">
  <div class="col-md-12 text-center" style="padding-bottom: 100px"><a href="menu.php" style="color:white;"><h4>Our Menu</h4></a></div>

</div>

<div class="row" style="padding-bottom: 100px;">
  <div class="col-md-4 text-center"><img src="breakfast.jpg"><H5 style="color:white;">Breakfast</H5>
</div>
<div class="col-md-4 text-center"><img src="lunch.jpg"><H5 style="color:white;">Lunch</H5>
</div>  <div class="col-md-4 text-center"><img src="dinner.jpg"><H5 style="color:white;">Dinner</H5>
</div>
</div>
<br><br>
<!-- OUR CHEF -->

<div class="container">
  <div class="row" style="padding-top: 50px padding-bottom: 100px;">
  <div class="col-md-6"><h4>Our Chef</h4>
<p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<!-- REVIEWS -->


  <div class="col-md-6"><h4>Reviews</h4><p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
 
  </div>

<!-- FOOTER -->

<div class="container">
<div class="row" style="padding-top: 100px;">
  <div class="col-md-4 text-center"><h6>Copyright 2018, Bistros LLC</h6></div>
  <div class="col-md-4 text-center"><h6>Bistros 123 Main St. Jax, FL</h6></div>
  <div class="col-md-4 text-center"><h6>Privacy Policy | Terms of Use</h6></div>

</div>
</body>
</html> 
