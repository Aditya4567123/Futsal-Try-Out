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
$name = $_GET["name"];
echo "NAME:".$name."<br>";
$cont = $_GET["num"];
echo "CONTACT NO.:".$cont."<br>";
$add = $_GET["adr"];
echo "Address:".$add."<br>";
$date = $_GET["date"];
echo "Date:".$date."<br>";
$tim = $_GET["time"];
echo "Time:".$tim."<br>";


$s= 'INSERT INTO book(sn, name, Contact_no, Address,Date,Time) VALUES
    ("","'.$name.'","'.$cont.'","'.$add.'","'.$date.'","'.$tim.'")';
$conn->query($s);
echo $s;
session_start();
$_SESSION['message']= "Account created Successfully";
header('location:http://localhost/newform/login/login.php');
?>