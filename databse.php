<?php
$hostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="course";
$conn=mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("something is wrong ");
}

?>