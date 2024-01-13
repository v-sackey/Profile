<?php
$NAME = $_POST['Name'];
$EMAIL = $_POST['Email']; 
$Yourmessage = $_POST['Message'];   

// Database Connection
$conn = new mysqli('localhost','root', '', 'website');
if($conn->connect_error ){
    die('Connection Failed : '.$conn->connect_error);
} 
else{
    echo "connectio established";
    // 
    // $stmt = $conn->prepare("insert into contact right(Name, Email, Message)
    // values(?,?,?)");
    // $stmt->bind_param("sss", $Name, $Email, $Message);
    // $stmt->execute();
    // echo "Message received";
    // $stmt-> close();
    // $conn->close();
} 
?>