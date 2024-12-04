<?php

    if(isset($_POST['count'])) {
        $_POST['count']++; 

        if($_POST['count'] > 5) {
            header('Location: /Lektion04/');
            die();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Att skicka data med POST</title>
    <style>

    input, label {
        display: block; 
        margin-top: 5px;
        margin-bottom: 5px;
    }

    </style>    
</head>
<body>

    <a href="/Lektion04/">Tillbaka</a>
    <h1>Lektion 04 - Att skicka data med POST</h1>
    
    <table>
        <thead>
            <tr>
                <th>Namn</th>
                <th>Värde</th>
            </tr>
        </thead>
        <tbody>
            <?php

                foreach($_POST as $key => $val) {
                    ?>

                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $val ?></td>
                    </tr>

                    <?php
                }

            ?>
        </tbody>
    </table>

    <hr>

    <p>Det går att skapa POST-förfrågan via JavaScript (t.ex. fetch-api)
        och från andra språk som t.ex. PHP, .NET, Java mf. Men det är svårt
        att manuellt konstruera en POST-frågan som en besökare av webbsidan 
        (svårt -- men inte omöjligt). Man använder POST-förfrågan för att 
        skicka data mellan sidor.</p>


    <b>Skicka data till mig själv</b>
    <form method="POST" action="post.php">
        
        <label for="name">Namn</label>
        <input type="text" name="name" id="name" value="<?= $_POST['name'] ?? '' ?>">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= $_POST['email'] ?? '' ?>">
        
        <input type="hidden" name="count" value="<?= $_POST['count'] ?? '1' ?>">

        <input type="submit" value="Skicka">

    </form>

</body>
</html>