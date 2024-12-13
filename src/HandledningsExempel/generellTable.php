<?php
    require('../database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generell table-funktion</title>
</head>
<body>
    <h1>Generell table-funktion</h1>

    <?php



        function table($res) {

            $header = false;    // Har skapat header/rubrik raden
            
            echo "<table>";

            while($row = $res->fetch_assoc()) {

                if(!$header) {
                    ?>
                    <thead>

                        <tr>
                    <?php
                         foreach($row as $key => $val) {
                            echo "<th>" . $key . "</th>";
                         }
                    ?>
                        </tr>

                    </thead>
                    <?php


                    $header = true;
                }

                echo "<tr>";
                foreach($row as $key => $val) {
                    echo "<td>" . $val . "</td>";
                }
                echo "</tr>";

            }

            echo "</table>";
        }



        $sql = "SELECT id, name FROM Employees";
        $result = $conn->query($sql);
        table($result);


    ?>


</body>
</html>