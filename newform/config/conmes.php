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
$Firname = $_GET["firstname"];
echo "First Name:".$Firname."<br>";
$Lasname = $_GET["lastname"];
echo "Last Name:".$Lasname."<br>";
$Country = $_GET["country"];
echo "Country is:".$Country."<br>";
$Subject = $_GET["subject"];
echo "Subject:".$Subject."<br>";


$s= 'INSERT INTO contact(Sn, First_name, Last_name, Country,Subject) VALUES
    ("","'.$Firname.'","'.$Lasname.'","'.$Country.'","'.$Subject.'")';
$conn->query($s);
echo $s;
session_start();
$_SESSION['message']= "Message has been delivered to the hosts.";
header('location:http://localhost/newform/login/config.php');
?>