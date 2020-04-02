<?php

$title = $_POST["title"];
$description = $_POST["description"];
$file = $_FILES["image"];
$directory = "assets/flowers/";
$targetFile = $directory . $file["name"]; // "assets/flowers/flower8.jpg"
move_uploaded_file($file["tmp_name"], $targetFile);

$database = mysqli_connect("localhost", "root", "", "rose_db");
$sql = "INSERT INTO flowers (title, description, image) VALUES ('$title', '$description', '$targetFile')";

mysqli_query($database, $sql);

header("Location: http://localhost/rose/index.php");
exit();
/*
 flowers:
------------

id
title (varchar)
description (text)
image (varchar)    => assets/flowers/flower8.jpg


 * */