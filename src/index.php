<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektions översikt</title>
</head>
<body>
   <h1>Filer</h1>
   <ul>
   <?php

    $files = scandir('.');
    foreach($files as $file) {
        if($file == '.' || $file == '..') continue;
        ?>
        <li>
            <a href="<?= $file ?>"><?= $file ?></a>
        </li>
        <?
    }

    ?>
    </ul>
</body>
</html>