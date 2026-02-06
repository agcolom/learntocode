<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

$agreed = $_POST['agree'];
$password=$_POST['password'];
$_SESSION['user_agreed']=$agreed; // Initializing Session
header("location: codeVisAlpha.php"); // Redirecting To Other Page
} else {
$error = "Sorry, you must accept the Academic License before you get access to the Code Visualiser";
}

?>

