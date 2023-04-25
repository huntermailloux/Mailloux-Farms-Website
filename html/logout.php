<!--COMP-2707 Final Project - Mailloux Farms-->
<!--Developed by Hunter Mailloux, 110063485-->
<!--Monday, March 27th, 2023-->

<?php

require 'ConnectionString.php';

$_SESSION = [];
session_unset();
session_destroy();
header("Location: index.html");
?>