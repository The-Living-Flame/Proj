<?php 

$servername="sql113.yzz.me";
$username="yzzme_41355605";
$password="Pogiako69";
$dbase="yzzme_41355605_dbcs";

$conn=mysqli_connect($servername, $username, $password, $dbase);

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
?>
