<?php

 $serverName= "LAPTOP-DV1Q0UAV\SQLEXPRESS";  
$connectionInfo=array("Database"=>"fv_user");
$conn=sqlsrv_connect($serverName, $connectionInfo);
if( $conn){
     echo "Connection established.<br />";
 }
else{
     echo "Connection could not be established.<br";
    die(print_r( sqlsrv_errors (), true));
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

?>