<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to J&T complain system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["Cust_username"]); ?></b>. Welcome to J&T complain sytem.</h1>
    <p>
        <p> Please state your complain in the form below, buat form pi compain dan check status or reply about complain </p>
        <a href="resetpassword.php" class="btn btn">Reset Your Password</a>
        <a href="logout.php" class="btn">Sign Out</a>
        <a href="complainform.php" class="btn"> complain form</a>
    </p>
</body>
</html>