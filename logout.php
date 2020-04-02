<?php
session_start();

unset($_SESSION["user_logged"]);

header ("Location: http://localhost/rose/index.php");
exit();