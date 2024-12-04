<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Att skicka data med GET</title>
</head>
<body>
    
    <h1>Lektion 04 - Att skicka data med GET</h1>

    <p>Du skickade namnet <? 
        echo isset($_GET['name']) ? $_GET['name'] : '';
    ?>.</p>

    <h2>Formulär</h2>

    <form method="GET" action="get.php">
        <label for="name">Namn</label>
        <input 
            type="text" 
            name="name" 
            id="name"
            value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>"
        >
        <input type="submit" value="Skicka">
    </form>

    <h2>Konstruera länkar</h2>

    <?php
        $mittKonstigaNamn = 'H@sse';
    ?>

    <p>Om du skapar länkarna själv tänk på att nycklar och värden
        måste vara urlencodade. Skicka namnet 
        <a href="get.php?name=<?= urlencode($mittKonstigaNamn) ?>">
            <?= $mittKonstigaNamn ?>
        </a>.</p>

</body>
</html>