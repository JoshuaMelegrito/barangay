<?php
$servername="localhost";
$username="root";
$password="";
$dbname='indigency';
$conn=new mysqli("localhost", "root", "", "indigency");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname=($_POST["firstname"]);
    $middlename=($_POST["middlename"]);
    $lastname=($_POST["lastname"]);
    $contact=($_POST["contact"]);
    $age=($_POST["age"]);
    $gender=$_POST['gender'];
    $address=($_POST["address"]);
    $reason=($_POST["reason"]);
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    echo ("connection successfull");
    $sql="insert into `bindigency`(firstname,middlename,lastname,contact,age,gender,address,reason)values('$firstname','$middlename','$lastname','$contact','$age','$gender','$address','$reason')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: endform.html");
    }else {
        die("connection failed" .$conn->connect_error);
    }
}