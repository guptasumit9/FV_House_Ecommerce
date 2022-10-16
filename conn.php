<?php

 $serverName= "LAPTOP-DV1Q0UAV\SQLEXPRESS";  
$connectionInfo=array("Database"=>"fv");
$conn=sqlsrv_connect($serverName, $connectionInfo);
if( $conn){
     // echo "Connection established.<br />";
 }
else{
     echo "Connection could not be established.<br";
    die(print_r( sqlsrv_errors (), true));
}
function phpAlert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
?>