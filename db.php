<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "bus_management";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Database Connection Failed");
}
?>