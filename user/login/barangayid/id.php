<?php
$servername="localhost";
$username="root";
$password="";
$dbname='barangayid';
$conn=new mysqli("localhost", "root", "", "barangayid");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name=($_POST["first_name"]);
    $middle_name=($_POST["middle_name"]);
    $last_name=($_POST["last_name"]);
    $contact=($_POST["contact"]);
    $house_no=($_POST["house_no"]);
    $street=($_POST["street"]);
    $subdivision=($_POST["subdivision"]);
    $vrn=($_POST["vrn"]);
    $precinct_no=($_POST["precinct_no"]);
    $residency_type=($_POST["residency_type"]);
    $civil_status=($_POST["civil_status"]);
    $citizenship=($_POST["citizenship"]);
    $height=($_POST["height"]);
    $weight=($_POST["weight"]);
    $eye_color=($_POST["eye_color"]);
    $father_name=($_POST["father_name"]);
    $father_dob=($_POST["father_dob"]);
    $mother_name=($_POST["mother_name"]);
    $mother_dob=($_POST["mother_dob"]);
    $photo=($_POST["photo"]);
    
}

if($conn->connect_error) {
    die("connection failed" .$conn->connect_error);
}
else {
    $sql="insert into`barangay_id_application`(first_name,middle_name,last_name,contact,house_no,street,subdivision,vrn,precinct_no,residency_type,civil_status,citizenship,height,weight,eye_color,father_name,father_dob,mother_name,mother_dob,photo)values('$first_name','$middle_name','$last_name','$contact','$house_no','$street','$subdivision','$vrn','$precinct_no','$residency_type','$civil_status',' $citizenship','$height','$weight','$eye_color','$father_name','$father_dob','$mother_name','$mother_dob','$photo')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location: endform.html");
    }else {
        die("connection failed" .$conn->connect_error);
    }
}
?>