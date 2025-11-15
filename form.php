<?php

include_once("database.php");

if(isset($_POST) && !empty($_POST)){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $number=$_POST['ph'];

    $sql= "INSERT INTO employee_info(Emp_name,Emp_age,Emp_ph_no)
            values('$name','$age','$number')";

    $result=mysqli_query($conn,$sql);

    if(!$result){
        die("NOt inserted".mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to Maxbridge</title>
</head>
<body>
    <form action="form.php" method="POST">
        <fieldset>
        <legend>Employee Details</legend>

    <label for="name">Emp_name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="age">Emp_age:</label>
    <input type="text" id="age" name="age"><br>

    <label for="ph">Emp_ph_no:</label>
    <input type="tel" id="ph" name="ph"><br>

    <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>