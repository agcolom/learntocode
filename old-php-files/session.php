<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['user_agreed'];
// SQL Query To Fetch Complete Information Of User


if(!isset($user_check)){

header('Location: index.php'); // Redirecting To Home Page
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2592000)) {
    // last request was more than 1 month ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>