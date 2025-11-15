<?php

include_once('database.php');

$id = $_POST['Emp_id'];
$name = $_POST['Emp_name'];
$age = $_POST['Emp_age'];
$ph = $_POST['Emp_ph_no'];


print_r($id.$name.$age.$ph);

$update="UPDATE employee_info 
           SET Emp_name='$name', Emp_age='$age', Emp_ph_no='$ph' 
           WHERE Emp_id='$id'";
$result3=mysqli_query($conn, $update);
if ($result3) {
    echo "Record updated!";
} else {
    echo "Error: ".mysqli_error($conn);
}

?>