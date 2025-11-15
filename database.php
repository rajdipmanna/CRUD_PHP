<?php

$host="localhost";
$user="root";
$pwd="";
$db_name="maxbridge_employee";

$conn=mysqli_connect($host, $user, $pwd, $db_name);

if($conn){

    echo "Connected Successfull"."<br>";
}
else{

    echo "Not connected";
}

?>