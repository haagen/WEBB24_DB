<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Att skicka data</title>
    <style>

    input, label {
        display: block; 
        margin-top: 5px;
        margin-bottom: 5px;
    }

    </style>
</head>
<body>

    <h1>Lektion 04 - Att skicka data</h1>

    <h2>GET</h2>

    <p>Genom att ange parametrar i URL:en kan vi skicka data till oss själva eller till andra skript.</p>

    <ul>
        <li>
            <a href="index.php?self=true">Skicka till oss själva</a>
        </li>
        <?php
            if(isset($_GET['self'])) {
        ?>
            <li>
                <a href="get.php?name=Pelle%20Svanslös">Skicka namnet Pelle Svanslös</a>
            </li>
        <?php
                
            }
        ?>
    </ul>


    <h2>POST</h2>

    <p>POST är det vanligaste sättet att skicka större mängder data.</p>

    <form method="POST" action="post.php">
        <label for="name">Namn</label>
        <input type="text" value="" name="name" id="name">
        <input type="submit" value="Skicka">
    </form>

    
</body>
</html>