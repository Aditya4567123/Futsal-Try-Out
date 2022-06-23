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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<style>
      h1{font color="#45a049"}
    </style>

</head>
<body>
    <h1>Contact Us </h1>
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
<div class="container">
  <form action="../config/conmes.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="nep">Nepal</option>
      <option value="ind">India</option>
      <option value="chi">China</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>
