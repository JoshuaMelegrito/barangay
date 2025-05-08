<?php
$servername="localhost";
$username="root";
$password="";
$dbname='goodmoral';
$conn=new mysqli("localhost", "root", "", "goodmoral");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname=($_POST["firstname"]);
    $middlename=($_POST["middlename"]);
    $lastname=($_POST["lastname"]);
    $contactnumber=($_POST["contactnumber"]);
    $age=($_POST["age"]);
    $purpose=($_POST["purpose"]);
    $daterequested=($_POST["daterequested"]);
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    echo "connection successfull";
    $sql="insert into `goodmorals`(firstname,middlename,lastname,contactnumber,age,purpose,daterequested)values('$firstname','$middlename','$lastname','$contactnumber','$age','$purpose','$daterequested')";
    $result=mysqli_query($conn,$sql);
    if($result) {
        header("location: endform.html");
    } else {
        die("connection failed" .$conn->connect_error);
    }
}


