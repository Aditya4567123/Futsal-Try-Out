<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "newform");
?>
<HTML>
<head>
    <title>About US Page</title>
    <link rel = "icon" href = "../images/logo.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/styleabout.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<input type="checkbox" id="active">
    <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
    <div class="wrapper">
      <ul>
<li><a href="http://localhost/newform/login/config.php">Home</a></li>
<li><a href="http://localhost/newform/login/about.php">About</a></li>
<li><a href="http://localhost/newform/login/service.php">Services</a></li>
<li><a href="http://localhost/newform/login/gallery.php">Gallery</a></li>
<li><a href="http://localhost/newform/login/contactus.php">Contact Us</a></li>
</ul>
</div>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>We rent happiness on the ground</p>
  <p>This Futsal has been created by the people below.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/team1.jpg" alt="Ayush" style="width:100%">
      <div class="container">
        <h2>Ayush Khadka</h2>
        <p class="title">CEO & Founder</p>
        <p>He is Mr.Ayush Khadka.</p>
        <p>ayush@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/team2.jpg" alt="Aayush" style="width:100%">
      <div class="container">
        <h2>Aayush Khadka</h2>
        <p class="title">Art Director</p>
        <p>He is Mr.Aayush Khadka.</p>
        <p>Aayush@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/team3.jpg" alt="Nishan" style="width:100%">
      <div class="container">
        <h2>Nishan Bade</h2>
        <p class="title">Designer</p>
        <p>He is Mr.Nishan Bade.</p>
        <p>Nishan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



</body>
</html>