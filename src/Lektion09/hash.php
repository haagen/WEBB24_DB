<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 09: Hash</title>
</head>
<body>

    <h1>Lektion 09: Hash</h1>

    <?php

        function hashString($string, $salt = null) {
            $salt = $salt ?? bin2hex(random_bytes(16)); // Skapa en ny salt om ingen tillhandahålls
            $hash = hash('sha256', $salt . $string);
            return ['hash' => $hash, 'salt' => $salt];
        }

        function verifyHash($string, $hash, $salt) {
            $calculatedHash = hash('sha256', $salt . $string);
            return hash_equals($calculatedHash, $hash);
        }

        $password = "123";
        $result = hashString($password);

        echo "Hash: " . $result['hash'] . "<br>";
        echo "Salt: " . $result['salt'] . "<br>";

        $ullisPassword = "233";
        if(verifyHash($ullisPassword, $result['hash'], $result['salt'])) {
            echo "Ulli kunde logga in!<br>";
        } else {
            echo "Ulli hade fel lösenord!<br>";
        }

        if(verifyHash("123", $result['hash'], $result['salt'])) {
            echo "Jovana kunde logga in!<br>";
        } else {
            echo "Jovana hade fel lösenord!<br>";
        }        

    ?>
    
</body>
</html>