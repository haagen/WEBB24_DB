<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 04 - Error</title>
</head>
<body>
    <a href="/Lektion04/">Tillbaka</a>
    <h1>Lektion 04 - Error</h1>

    <p style="color: red; font-weight: bold;">
        <?= $_REQUEST['message'] ?? '' ?>
    </p>
    
</body>
</html>