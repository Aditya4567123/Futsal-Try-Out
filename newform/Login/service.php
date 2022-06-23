<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "newform");
?>
<HTML>
<head>
    <title>Services Page</title>
    <link rel = "icon" href = "../images/logo.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/styleservice.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body style="background-color=#aed581;">
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

<div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
    <div class="hd">Why People Believe in Us</div>
    <p><small class="text-muted">Always render more and better service than <br />is expected of you, no matter what your ask may be.</small></p>
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 col-12">
            <div class="card-content">
                <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />
                    <div class="shadow"></div>
                    <div class="card-title"> We're Affordable  </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">We spent hundred of hours creating this futsal for you to enjoy. We collect a small fee from you inorder to keep this place running.</small> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
                    <div class="card-title"> We're Unbiased </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted"> We are unbaised to every customer. We believe in a service of first come first serve.</small> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 col-12 ml-2">
            <div class="card-content">
                <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />
                    <div class="card-title"> We Guide you </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">If are wishing to acquire more skills of this beautiful game, It is avilable for a price.</small> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
	   <h3>@Copyright reserved to Hamro Futsal</h3>
</div>
</div>
</div>
</div>
</body>
</html>