<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";

// Execute the DELETE query
$sql = "DELETE FROM users WHERE username = '{$_SESSION["username"]}'";

if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

session_destroy();
 
// Redirect to login page
header("location: index.php");
