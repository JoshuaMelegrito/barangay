<?php
$servername="localhost";
$username="root";
$password="";
$dbname='jobseeker';
$conn=new mysqli("localhost", "root", "", "jobseeker");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>