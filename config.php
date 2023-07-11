<?php
$servername = "localhost";
$username = "root";
$email = "";
$dbname = "login";
$conn = new mysqli($servername,$username,$email,$dbname);

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
?>