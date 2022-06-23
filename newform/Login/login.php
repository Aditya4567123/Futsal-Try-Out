<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
   <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    

</head>

<body>
<P><?php echo $_SESSION['message']?></P>
     <form name="f1" action="../login/config.php" onsubmit="return validation()" method="POST" >

        <h1>LOGIN</h1>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name:</label>

        <input type="text" name="uname" id="user" placeholder="User Name"><br>

        <label>Password:</label>

        <input type="password" name="password" id="pass" placeholder="Password"><br> 

        <button type="submit">Login</button>
       
        <a href='signup.php'>Sign Up</a>
        <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
     </form>

</body>

</html>