<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Appication Name : Students Table </h1>

<?php 
        require 'students.php';
        echo "<table style='border:1px solid black;'>" ;
        echo "<th>Name</th>" ;
        echo "<th>Email</th>";
        echo "<th>Status</th>";
    
        foreach ($students as $key => $value) {
            // change color of php row
            echo "<tr style='background-color: " . ($value['status'] == 'PHP' ? 'yellow' : 'initial') . ";'>";
            echo "<td>" . $value['name'] . "</td> " ;
            echo "<td>" . $value['email'] . "</td>" ;
            echo "<td>" . $value['status'] . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    ?>

</body>
</html>