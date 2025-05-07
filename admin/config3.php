<?php
$servername="localhost";
$username="root";
$password="";
$dbname='indigency';
$conn=new mysqli("localhost", "root", "", "indigency");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>