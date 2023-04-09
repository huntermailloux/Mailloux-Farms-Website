<?php

include 'ConnectionString.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM SiteUsers WHERE username = ? AND password = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: admin.php');
    exit;
} else {
    header('Location: login.php?error=1');
    exit;
}
?>