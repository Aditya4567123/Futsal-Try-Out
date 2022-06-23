<html>
    <head> 
        <title> A form</title>
        <link rel="stylesheet" href="../CSS/style2.css">
        
    </head>
    <body>
    <form action="../config/insert.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter your User Name" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="../tap/tap.pdf" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" id="canbut">Cancel</button>
      <script>
       document.getElementById("canbut").addEventListener("click", myFunction);
       function myFunction() {
         window.location.href="Login.php";
       }
      </script>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    <p><a href="tablepage.php">Click here...</a>to check the recorded data..</p>
</body>
</html>