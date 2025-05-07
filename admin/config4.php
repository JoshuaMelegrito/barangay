<?php
$servername="localhost";
$username="root";
$password="";
$dbname='goodmoral';
$conn=new mysqli("localhost", "root", "", "goodmoral");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>