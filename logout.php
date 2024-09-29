<?php
session_start(); // Start the session
$_SESSION = []; // Clear the session array
session_destroy(); // Destroy the session
header("location: login.php"); // Redirect to login page
exit;
?>
