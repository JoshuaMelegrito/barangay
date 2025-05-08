<?php
$servername="localhost";
$username="root";
$password="";
$dbname='bpermits';
$conn=new mysqli("localhost", "root", "", "bpermits");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name=($_POST["first_name"]);
    $middle_name=($_POST["middle_name"]);
    $last_name=($_POST["last_name"]);
    $last_name_suffix=($_POST["last_name_suffix"]);
    $contact_number=($_POST["contact_number"]);
    $house_no=($_POST["house_no"]);
    $street=($_POST["street"]);
    $subdivision=($_POST["subdivision"]);
    $reason=($_POST["reason"]);
    $photo=($_POST["photo"]);
    
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    echo ("connection successfull");
    $sql="insert into `permit`(first_name,middle_name,last_name,last_name_suffix,contact_number,house_no,street,subdivision,reason,photo)values('$first_name','$middle_name','$last_name','$last_name_suffix','$contact_number','$house_no','$street','$subdivision','$reason','$photo')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: endform.html");
    }else {
        die("connection failed" .$conn->connect_error);
    }
}
?>