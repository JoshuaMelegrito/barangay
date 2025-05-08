<?php
$servername="localhost";
$username="root";
$password="";
$dbname='jobseeker';
$conn=new mysqli("localhost", "root", "", "jobseeker");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name=($_POST["last_name"]);
    $first_name=($_POST["first_name"]);
    $middle_name=($_POST["middle_name"]);
    $contact=($_POST["contact"]);
    $address=($_POST["address"]);
    $birthdate=($_POST["birthdate"]);
    $job_preference=($_POST["job_preference"]);
    $birthcertificate=($_POST["birthcertificate"]);
   
    
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    $sql="insert into `seekerjob`(last_name,first_name,middle_name,contact,address,birthdate,job_preference,birthcertificate)values('$last_name','$first_name','$middle_name','$contact','$address','$birthdate','$job_preference','$birthcertificate')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: endform.html");
    }else {
        die("connection failed" .$conn->connect_error);
    }
}
?>