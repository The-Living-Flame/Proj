<?php 

$servername="localhost";
$username="root";
$password="";
$dbase="dbcs";

$conn=mysqli_connect($servername, $username, $password, $dbase);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
?>
