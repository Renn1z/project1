<?php
require 'link.php';



$create_db = ("CREATE DATABASE form");
if (mysqli_query($link, $create_db)) {
    echo "Database created successfully.";
    } 
    else {
        echo "Error creating database: $create_db. " . mysqli_error($link);
    }



$select_db = "USE form";
if (mysqli_query($link, $select_db)) {
    echo "\nDatabase selected successfully.";
    }
    else {
        echo "Error selected database: $select_db . " . mysqli_error($link);
    }
    


$sql = "CREATE TABLE users(
    id INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    message TEXT NOT NULL,
    country enum('russia','belarus','kazakhstan','uzbekistan'),
    email VARCHAR(70) NOT NULL UNIQUE)
    ";
if (mysqli_query($link, $sql)) {
    echo "\nTable users created successfully.";
    } 
    else {
        echo "Error created table: $sql. " . mysqli_error($link);
    }

$sql2 = "CREATE TABLE weather (
    temp INT(5) NOT NULL, 
    wing_speed INT(5) NOT NULL, 
    region VARCHAR(100) NOT NULL,
    date TEXT NOT NULL)
    ";
if (mysqli_query($link, $sql2)) {
    echo "\nTable weather created successfully.";
    } 
    else {
        echo "Error created table: $sql2. " . mysqli_error($link);
    }
    
mysqli_close($link);