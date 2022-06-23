<?php
define("Host","localhost");
define ("User","root");
define("Password","");
$conn= new mysqli(Host,User, Password, "newform");
if($conn){
    echo"DB connected Successfully<br>";
}

$s="CREATE DATABASE newform";
$conn->query($s);
$email = $_GET["email"];
echo "Email:".$email."<br>";
$User_name = $_GET["uname"];
echo "User Name:".$User_name."<br>";
$Password = md5($_GET["psw"]);
echo "Password Name:".$Password."<br>";
$Rpassword = md5($_GET["pswrepeat"]);
echo "Re-typed Password Name:".$Rpassword."<br>";


$s= 'INSERT INTO signup(sn, email, uname, password,rpassword) VALUES
    ("","'.$email.'","'.$User_name.'","'.$Password.'","'.$Rpassword.'")';
$conn->query($s);
echo $s;
session_start();
$_SESSION['message']= "Account created Successfully";
header('location:http://localhost/newform/login/login.php');
?>
