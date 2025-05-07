<?php
$servername="localhost";
$username="root";
$password="";
$dbname='bpermits';
$conn=new mysqli("localhost", "root", "", "bpermits");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>