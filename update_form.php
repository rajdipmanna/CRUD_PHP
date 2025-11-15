<?php
include_once('database.php');


$id=$_GET['id'];

if (!isset($id)) {
    die("ID not found in URL");
}

$sql2="SELECT * FROM employee_info WHERE Emp_id=$id";

$result2=mysqli_query($conn,$sql2);

$row1=mysqli_fetch_assoc($result2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to Maxbridge</title>
</head>
<body>
    <form action="update.php" method="POST">
        <fieldset>
        <legend>Employee Details</legend>
    <input type="hidden" name="Emp_id" value="<?php echo $row1['Emp_id']; ?>">

    <label for="name">Emp_name:</label>
    <input type="text" id="name" name="Emp_name" value="<?php echo $row1['Emp_name']; ?>"><br>

    <label for="age">Emp_age:</label>
    <input type="text" id="age" name="Emp_age" value="<?php echo $row1['Emp_age']; ?>"><br>

    <label for="ph">Emp_ph_no:</label>
    <input type="tel" id="ph" name="Emp_ph_no" value="<?php echo $row1['Emp_ph_no']; ?>"><br>

    <input type="submit" value="Submit">
  </fieldset>
</form>
</body>
</html>