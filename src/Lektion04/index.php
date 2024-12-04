<?php

    session_start();    // Startar session

    if(isset($_GET['cookieText'])) {
        setcookie('cookieText', $_GET['cookieText'], time()+600);
    }

    if(isset($_POST['username']) || isset($_POST['password'])){

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if($username == 'martin' && $password == '1234'){
            $_SESSION['username'] = $username;
        } else {
            header('Location: /Lektion04/error.php?message=Fel+användarnamn+eller+lösenord');
            die();
        }

    }

?>
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

    <h2>Cookies</h2>

    <p>Cookies kan sättas med PHP. Cookies skickas i headern och 
        måste därför skickas innan något innehåll skickas. Detta görs
        därför oftast överst på sidan. </p>

    
    <form method="GET">
            <label for="cookieText">Cookie Texten</label>
            <input 
                type="text" 
                name="cookieText" 
                value="<?= $_REQUEST['cookieText'] ?? '' ?>"
            >
            <input type="submit" value="Skicka Cookie" >
    </form> 
    
    <p><b>DU</b> kan hitta information från alla dina <a href="cookies.php">Cookies här</a></p>
    
    <h2>Sessions</h2>

    <p>Sessions är ett bra sätt att spara information om användaren.</p>

    <p><a href="secret.php">Secret sida</a></p>

    <?php

            if(isset($_SESSION['username'])) {
    ?>
            <p>
                Du är inloggad som <span style="color: red">
                    <?= $_SESSION['username'] ?></span>. Du kan 
                    <a href="logout.php">logga ut här</a>.
            </p>
    <?php
            } else {

    ?>


    <form method="POST">

        <label for="username">Användarnamn</label>
        <input type="text" name="username">
        <label for="password">Lösenord</label>
        <input type="password" name="password">

        <input type="submit" value="Logga in">

    </form>

    <?php

            }
    ?>


</body>
</html>