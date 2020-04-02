<?php

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$db = mysqli_connect("localhost", "root", "", "rose_db");

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);

if($user) {
    $_SESSION["user_logged"] = true;
    header("Location: http://localhost/rose/create.php");
    exit;
}

header("Location: http://localhost/rose/login.php");
exit;