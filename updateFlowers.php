<?php


$title = $_POST["title"];
$description = $_POST["description"];
$file = $_FILES["image"];
$directory = "assets/flowers/";
$targetFile = $directory . $file["name"]; // "assets/flowers/flower8.jpg"
move_uploaded_file($file["tmp_name"], $targetFile);

$database = mysqli_connect("localhost", "root", "", "rose_db");
$sql = "UPDATE person SET title = '$title', description = '$description', image = '$targetFile')";

mysqli_query($database, $sql);

header("Location: http://localhost/rose/show.php");
exit();