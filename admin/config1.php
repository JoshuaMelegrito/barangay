<?php
$servername="localhost";
$username="root";
$password="";
$dbname='barangayid';
$conn=new mysqli("localhost", "root", "", "barangayid");

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}

?>