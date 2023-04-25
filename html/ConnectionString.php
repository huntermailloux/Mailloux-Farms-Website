<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php
session_start();
$db_host = 'localhost'; 
$db_username = 'maillo51_db'; 
$db_password = 'Mailloux123'; 
$db_name = 'maillo51_db'; 


$conn = new mysqli($db_host, $db_username, $db_password, $db_name);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>