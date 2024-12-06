<?php
    require('../database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 05 - Att ansluta till databasen med PHP</title>
</head>
<body>
    
    <h1>Lektion 05 - Att ansluta till databasen med PHP</h1>

    <?php

    if( function_exists('mysqli_connect') ) {
        echo "MySQLi är installerat och aktiverat! Bra!";
    } else {
        echo "MySQLi är INTE aktivit -- uppdatera din docker image!";
    }

    ?>

    <h2>Grunddläggande kommunikation med databasen</h2>

    <blockquote>
        INSERT INTO Clubs (name) VALUE ('klubbens namn');<br>
        SELECT * FROM Clubs;
    </blockquote>

    <?php
        /* Stoppa in data i databasen */
        $clubName = "Eslövs If";
        $sql = "INSERT INTO Clubs (name) VALUE ('$clubName')";
        echo "Min SQL-string: $sql<br>";

        //$result = $conn->query($sql);
        //echo "Vi skapade " . $conn->affected_rows . " antal rader.<br>";

        $sql = "SELECT * FROM Clubs";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "Det fanns " . $result->num_rows . " rader i svaret.<br>";
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Namn</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "  <td>" . $row['id'] . "</td>";
                    echo "  <td>" . $row['name'] . "</td>";
                    echo "</tr>";
                }
            ?>

                    </tbody>
                </table>
            <?php
        } else {
            echo "Det fanns ingen data att visa!<br>";
        }


    ?>

</body>
</html>