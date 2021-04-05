<?php
session_start();
include("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
$_SESSION["success"] = "User Deleted Successfully";
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>