<?php
$Name= filter_input(INPUT_POST, 'Name');
$Email= filter_input(INPUT_POST, 'Email');  
$Message= filter_input(INPUT_POST, 'Message');  

if(!empty($Name)){
if(!empty($Email)){
if(!empty($Message)){    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = 'website';

    // Create connection
    $dbname = 'website';
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
       die('Connect Error('.mysqli_connect_errno().')'
       .mysqli_connect_error());     
    }
       else{
       $sql = "INSERT INTO contact(Name,Email,Message)
       values('$Name', '$Email', '$Message')";
       if($conn->query($sql)){
        echo"Message sent. ";
    
}  
else {
    echo"Error" . $sql .<br> . $conn->error;
    }  
conn->close();
}     
}      
    
    } 
    else {
        echo"Please leave a message. ";
        die(); 
    
}  
}    
    else {
        echo"Email should be filled.";
        die(); 
    
} 
} 
else {
    echo"Name should be filled.";
    die();
} 
