<?php

$servername = "form";
$username = "user";
$db_password = "0000";
$db = "form";

$link = mysqli_connect($servername, $username, $db_password, $db);

if ($link === false) {
   die("Error connection failed" . mysqli_connect_error());
}