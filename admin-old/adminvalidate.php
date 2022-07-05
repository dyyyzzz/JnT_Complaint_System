<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$Staff_Username = test_input($_POST["Staff_Username"]);
	$Staff_Password = test_input($_POST["Staff_Password"]);
	$stmt = $conn->prepare("SELECT * FROM Staff");
	$stmt->execute();
	$staffusers = $stmt->fetchAll();
	
	foreach($staffusers as $staffuser) {
		
		if(($staffuser['Staff_Username'] == $Staff_Username) &&
			($staffuser['Staff_Password'] == $Staff_Password)) {
				header("location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>