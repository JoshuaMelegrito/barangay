<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("location: invalid.html");
}

if (strlen($_POST["password"]) < 8) {
    header("location: notfound.html");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    header("location: united.html");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    header("location: united.html");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    header("location: notmatch.html");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}