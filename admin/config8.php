<?php
$servername="localhost";
$username="root";
$password="";
$dbname='blogin_db';
$conn=new mysqli("localhost", "root", "", "blogin_db");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>