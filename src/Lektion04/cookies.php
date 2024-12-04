<?php
   //session_start();    // Skapa en PHP-session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Att skicka data med Cookies</title>
</head>
<body>

    <a href="/Lektion04/">Tillbaka</a>
    <h1>Lektion 04 - Att skicka data med Cookies</h1>

    <p>Cookies skickas automatiskt mellan klient och server. Då detta skickas
        med varje förfrågan (avset om det är GET eller POST) är det bra om 
        informationen hålls kort.</p>
    <p>Ofta innehåller bara cookies ett id -- sedan håller servern redan på vem 
        som har vilket ID.</p>
    <p>Cookies kan inte raderas med PHP, men du kan ändra dess giltighetstid så 
        att de blir ogiltiga direkt och då tas de bort. </p>

    <table>
        <thead>
            <tr>
                <th>Namn</th>
                <th>Värde</th>
            </tr>
        </thead>
        <tbody>
        <?php

            foreach($_COOKIE as $key => $val) {
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

</body>
</html>