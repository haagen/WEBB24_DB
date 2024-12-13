<?php
    require('../database.php');

    // deleteId
    if(isset($_GET['deleteId'])) {
        // . $_GET['deleteId']
        $sql = 'DELETE FROM Contacts WHERE id = ?';
        //echo $sql;
        //$conn->query($sql);
        $preparedStatement = $conn->prepare($sql);
        $preparedStatement->bind_param("i", $_GET['deleteId']);
        $result = $preparedStatement->execute();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 09 - Datasäkerhet</title>
</head>
<body>

    <h1>Lektion 09 - Datasäkerhet</h1>


    <?php

    $sql = 'SELECT * FROM Contacts';

    $result = $conn->query($sql);

    $counter = 0;

    ?>

    <table border="1">
        <thead>
            <tr>
                <td></td>
                <td>id</td>
                <td>name</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <?php
            while($rad = $result->fetch_assoc()) {
                $counter++;
                ?>
                    <tr>
                        <td><?= $counter ?></td>
                        <td><?= $rad['id'] ?></td>
                        <td><?= $rad['name'] ?></td>
                        <td><a href="index.php?deleteId=<?= $rad['id'] ?>">Radera</a></td>
                    </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>