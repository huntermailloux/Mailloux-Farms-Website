<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php
require 'ConnectionString.php';
function usernameExists($username, $conn) {
    $query = "SELECT * FROM SiteUsers WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        if (usernameExists($username, $conn)) {
            header("Location: login.php?error=username_already_exists");
            exit();
        }
        else {        
            $query = "INSERT INTO SiteUsers (FirstName, LastName, username, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssss", $FirstName, $LastName, $username, $password);
    
            if ($stmt->execute()) {
                header("Location: login.php?success=account_created");
            } else {
                header("Location: login.php?error=account_not_created");
            }
    
            $stmt->close();
        }
    } else {
        header("Location: login.php?error=password_mismatch");
    }
} else {
    header("Location: login.php?error=missing_data");
}
?>
