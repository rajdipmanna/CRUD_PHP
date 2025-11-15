<?php
    include_once('database.php');
    echo "I am in";

    $query="SELECT Emp_id,Emp_name,Emp_age,Emp_ph_no FROM employee_info";

    $result=mysqli_query($conn,$query);

    if(!$result){
        die("error descriptio".mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee_info</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Emp_id</th>
            <th>Emp_name</th>
            <th>Emp_age</th>
            <th>Emp_ph_no</th>
            <th>Action</th>
    </tr>
        <?php
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>".$row['Emp_id']."</td>";
                        echo"<td>".$row['Emp_name']."</td>";
                        echo"<td>".$row['Emp_age']."</td>";
                        echo"<td>".$row['Emp_ph_no']."</td>";
                        echo "<td>
                            <a href='update_form.php?id=".$row['Emp_id']."'>Update

                            <a href='delete.php?id=".$row['Emp_id']."'>Delete</td>";
                        echo"</tr>";
                    }
                }
                else{
                    echo "No records found !!";
                }
        ?>
    </table>
</body>
</html>