<?php

//komunikim me API.

$databse = mysqli_connect("localhost", "root", "", "rose_db");

$sql = "SELECT email FROM users";
$result = mysqli_query($databse, $sql);

$emails = mysqli_fetch_all($result, MYSQLI_ASSOC);

print json_encode($emails);
