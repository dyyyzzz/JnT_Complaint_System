<?php
$Cust_Email = $_POST['Cust_Email'];
$Cust_Password = $_POST['Cust_Password'];


//Database
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into customer(Cust_Email,Cust_Password)
            values(?, ?)");
    $stmt->bind_param("sssssi",$Cust_Email, $Cust_Password);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}