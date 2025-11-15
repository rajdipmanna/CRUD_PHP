<?php

include_once('database.php');

$id1=$_GET['id'];

$query2="DELETE FROM employee_info where Emp_id=$id1";

$result4=mysqli_query($conn,$query2);


if($result4){

    echo "ID ".$id1." is Deleted";
}


?>