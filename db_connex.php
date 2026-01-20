<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "pgc_db";
 $sign = mysqli_connect($servername, $username, $password, $db);
 if(!$sign) {
    die("connection failed: " . mysqli_connect_error());
 }
 else{
    //header("Location= response.php");
    echo "Connection succesful <br>";
 }

?>