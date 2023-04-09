<?php

$db_host = 'localhost'; 
$db_username = 'maillo51_db'; 
$db_password = 'Mailloux123'; 
$db_name = 'maillo51_db'; 


$conn = new mysqli($db_host, $db_username, $db_password, $db_name);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>