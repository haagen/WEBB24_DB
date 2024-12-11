<?php
    require('../database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 07 - Söka efter data</title>
</head>
<body>
    <h1>Lektion 07 - Söka efter data</h1>

    <?php

        $min = $_GET['min'] ?? 1;
        $max = $_GET['max'] ?? 10;

        $sql = "SELECT name, birthday, noOfCars FROM Contacts ";
        $sql .= "WHERE birthday IS NOT NULL AND ";
        $sql .= "noOfCars BETWEEN $min AND $max"; 

        echo $sql;
        echo "<br><br>";
        
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            print_r($row);
        }
    ?>

    
</body>
</html>