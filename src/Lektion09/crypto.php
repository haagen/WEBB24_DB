<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 9 - Krypto</title>
</head>
<body>

    <h1>Lektion 9 - Krypto</h1>

    <?php

        function encrypt($data, $key) {
            $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
            return base64_encode($iv . $encrypted);
        }

        function decrypt($data, $key) {
            $data = base64_decode($data);
            $ivLength = openssl_cipher_iv_length('aes-256-cbc');
            $iv = substr($data, 0, $ivLength);
            $encrypted = substr($data, $ivLength);
            return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
        }

        $superSecretKey = 'godisgodistomteskum';
        $text = "Bananen är ett bär!";

        echo "Vårt hemliga meddelande är: $text<br>";

        $enc = encrypt($text, $superSecretKey);
        echo "Vårt krypterade meddelande är: $enc<br>";
        $dec = decrypt($enc, $superSecretKey);
        echo "Vårt hemliga meddelande är nu dekrypterat: $dec<br>";


    ?>

    
</body>
</html>