<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Cust_username = $Cust_password = "";
$Cust_Username_err = $Cust_password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if Cust_username is empty
    if(empty(trim($_POST["Cust_username"]))){
        $Cust_Username_err = "Please enter Username.";
    } else{
        $Cust_username = trim($_POST["Cust_username"]);
    }
    
    // Check if Cust_password is empty
    if(empty(trim($_POST["Cust_password"]))){
        $Cust_password_err = "Please enter your password.";
    } else{
        $Cust_password = trim($_POST["Cust_password"]);
    }
    
    // Validate credentials
    if(empty($Cust_Username_err) && empty($Cust_password_err)){
        // Prepare a select statement
        $sql = "SELECT Cust_ID, Cust_username, Cust_password FROM customer WHERE Cust_username = ?";
        
        if($stmt = $link->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_Cust_Username);
            
            // Set parameters
            $param_Cust_Username = $Cust_username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if Cust_username exists, if yes then verify Cust_password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($Cust_ID, $Cust_username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($Cust_password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["Cust_ID"] = $Cust_ID;
                            $_SESSION["Cust_username"] = $Cust_username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.html");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid Cust_username or Cust_password.";
                        }
                    }
                } else{
                    // Cust_username doesn't exist, display a generic error message
                    $login_err = "Invalid Cust_username or Cust_password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $link->close();
}
?>