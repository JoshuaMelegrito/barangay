<?php
$servername="localhost";
$username="root";
$password="";
$dbname='businesspermits';
$conn=new mysqli("localhost", "root", "", "businesspermits");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $businessname=($_POST["businessname"]);
    $first_name=($_POST["first_name"]);
    $middle_name=($_POST["middle_name"]);
    $last_name=($_POST["last_name"]);
    $last_name_suffix=($_POST["last_name_suffix"]);
    $address=($_POST["address"]);
    $businesstype=($_POST["businesstype"]);
    $location=($_POST["location"]);
    $contact=($_POST["contact"]);
    $email=($_POST["email"]);
    $startdate=($_POST["startdate"]);
    $tincode=($_POST["tincode"]);
    $photo=($_POST["photo"]);
   
    
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    $sql="insert into `busspermit`(businessname,first_name,middle_name,last_name,last_name_suffix,address,businesstype,location,contact,email,startdate,tincode,photo)values('$businessname','$first_name','$middle_name','$last_name','$last_name_suffix','$address','$businesstype','$location','$contact','$email','$startdate','$tincode','$photo')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: endform.html");
    }else {
        die("connection failed" .$conn->connect_error);
    }
}
?>