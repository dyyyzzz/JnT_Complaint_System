<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['Cust_Username']) && isset($_POST['Cust_Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Cust_Username']);
	$pass = validate($_POST['Cust_Password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Cust_Username'] === $uname && $row['Cust_Password'] === $pass) {
            	$_SESSION['Cust_Username'] = $row['Cust_Username'];
            	$_SESSION['Cust_Name'] = $row['Cust_Name'];
            	$_SESSION['Cust_ID'] = $row['Cust_ID'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}