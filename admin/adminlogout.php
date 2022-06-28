<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
session ();

 
// Redirect to login page
header("location: stafflogin.php");
exit;
?>