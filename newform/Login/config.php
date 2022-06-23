<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "newform");
if($conn){

    echo '<script> alert("DB connected Successfully");</script>';
}

if(isset($_POST["uname"], $_POST["password"])) 
    {     

        $User_name = $_POST["uname"]; 
        $Password = md5($_POST["password"]);
        

        

        $result = mysqli_query ($conn,"SELECT uname, password FROM signup WHERE uname = '".$User_name."' AND  password = '".$Password."'");

        if(mysqli_num_rows($result) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $User_name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

//--------------------------------------------php and All--------------------------------------
?>
<HTML>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        #clock {
      height: 5vh;
      width: 15%;
      
      color: #ffffff;
      display: flex;
      align-items: right;
      justify-content: center;
      font-size: 50px;
    }
    </style>

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
<div class="content">
      <div class="title">
Welcome to Hamro Futsal.</div>
<p>
A Pitch for all...</p>
</div>


<div id="clock">

  </div>
  <script>
      function clock() {
      let date = new Date();
      let hrs = date.getHours();
      let mins = date.getMinutes();
      let secs = date.getSeconds();
      let period = "AM";
    
      if (hrs == 0) hrs = 12;
      if (hrs > 12) {
        hrs = hrs - 12;
        period = "PM";
      }
    
      hrs = hrs < 10 ? `0${hrs}` : hrs;
      mins = mins < 10 ? `0${mins}` : mins;
      secs = secs < 10 ? `0${secs}` : secs;
    
      let time = `${hrs}:${mins}:${secs} ${period}`;
      setInterval(clock, 1000);
      document.getElementById("clock").innerText = time;
    }
    
    clock();

  </script>
  
</body>
</html>