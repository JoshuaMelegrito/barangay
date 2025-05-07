<?php
$servername="localhost";
$username="root";
$password="";
$dbname='clerance';
$conn=new mysqli("localhost", "root", "", "clerance");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>