<?php
$servername="localhost";
$username="root";
$password="";
$dbname='businesspermits';
$conn=new mysqli("localhost", "root", "", "businesspermits");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>