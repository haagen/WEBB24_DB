<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        header("Location: error.php?message=404+sidan+finns+inte!");
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Hemlig sida</title>
</head>
<body>

    <a href="/Lektion04/">Tillbaka</a>
    <h1>Lektion 04 - Hemlig sida</h1>

    <p>DETTA ÄR EN HEMLIG SIDA!</p>

    <p><?= $_SESSION['username'] ?? '' ?></p>
    
</body>
</html>