<?php
$servername="localhost";
$username="root";
$password="";
$dbname='login_db';
$conn=new mysqli("localhost", "root", "", "login_db");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>