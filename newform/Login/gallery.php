<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "newform");

?>
<HTML>
<head>
    <title>Booking Page</title>
    <link rel = "icon" href = "../images/logo.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="../CSS/stylegallery.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../JS/gallery.js"></script>
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
<form action="../config/booking.php" method="GET">
  <div class="container">
    <h1>Booking</h1>
    <p>Please fill in this form to book for youe desired time.</p>
    <hr>

    <label for="Name"><b>Name:</b></label>
    <input type="text" placeholder="Enter " name="name" id="name" required><br>

    <label for="Number"><b>Contact Number:</b></label>
    <input type="int" placeholder="Enter Your Number" name="num"  required><br>

    <label for="Address"><b>Address:</b></label>
    <input type="text" placeholder="Your Address" name="adr" id="address" required><br>
    <hr>
    <label for="Date">Date to book:</label><br>
    <input type="date" id="date" name="date"><br><br>
    <label for="Time">Time to book:</label><br><br>
    <input type="text" id="Time" name="time">


    <button type="submit" class="registerbtn">Book</button>
  </div>


</form>
</body>

</html>
