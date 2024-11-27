<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 02 - PHP: Datatyper, Arrayer, Kontrollstrukturer mm</title>
    <style>
        * {
            font-family: 'Verdana', sans-serif;
        }
    </style>
</head>
<body>

    <h1>Lektion 02 - PHP: Datatyper, Arrayer, Kontrollstrukturer mm</h1>

    <h2>Att skriva PHP</h2>
    <p>
    <?php
        echo 'Detta är en text från ett php-block!';
    ?>
    <?= 'Detta är också en text från ett php-block!' ?>
    </p>

    <h2>Datatyper och Variabler</h2>
    <ul>
    <?php
        $string = 'Detta är en sträng';
        $integer = 10;
        $float = 3.14159;
        $boolean = true;

        echo '<li>Ett exempel på en sträng: ' . $string . '</li>';
        echo '<li>Ett exempel på ett heltal: ' . $integer . '</li>';
        echo '<li>Ett exempel på ett flyttal: ' . $float . '</li>';
        echo '<li>Ett exempel på en boolean: ' . $boolean . '</li>';

    ?>
    </ul>
    <p>
    <?php
        // Skillnad på " eller ' ? 

        // " - skriver ut variabler
        // " - escape:are tecken

        echo "Sträng som har en variabel i sig ($integer)<br>";
        echo "Sträng som innehåller en escape:ad radbrytnign \n\t men detta syns inte i html.<br>";

        $x = 5; 
        echo "X ($x) är: " . gettype($x) . "<br>";
        settype($x, 'string');
        echo "X ($x) är: " . gettype($x) . "<br>";
        echo "Finns Y? " . isset($y) . "<br>";
        echo "Finns X? " . isset($x) . "<br>";

        $y = 'Kalle';
        unset($y);
        echo "Y? ($y)<br>";

        // Dynamiska variabler "made simple" ;-) 
        $nivå1 = 'nivå2';
        echo "\$nivå1 = $nivå1<br>";
        $$nivå1 = 'nivå3';
        echo "\$nivå2 = $nivå2<br>";
        $$$nivå1 = 'nivå4';
        echo "\$nivå3 = $nivå3<br>";

        $dog = 'Är en hund';
        $cat = &$dog;
        echo "\$dog = $dog, \$cat = $cat<br>";
        $cat = 'Är ju en katt';
        echo "\$dog = $dog, \$cat = $cat<br>";

        // Definera en ny konstant
        define('PI', 3.14159);
        echo "Vi kan nu använda PI i våra beräkningar " . PI . "<br>";
    ?>
    </p>

    <h2>Listor (arrayer)</h2>

    $nummer = [ 1, 6, 9, 2, 9, 5 ];<br>
    
    <?php
        $nummer = [ 1, 6, 9, 2, 9, 5 ];
        echo "På index nummer fyra finns: $nummer[4]<br>"
    ?>

    print_r($nummer); -- kan vara bra för felsökning<br>
    <?php
        print_r($nummer);
    ?>
    
    <h3>En associativ lista (nycklar)</h3>
    
    <?php

        $bil = [
            'brand' => 'Suzuki',
            'model' => 'Samurai',
            'year' => 1986,
            'bestCar' => true
        ];
        
    ?>
    Världens bästa bil är en <?= $bil['brand'] ?> <?= $bil['model'] ?>! <br>

    <h3>LIFO-kö</h3>
    LIFO = First In First Out<br>
    <?php
        $fifo = [];

        array_push($fifo, $bil);
        array_push($fifo, 'En Volvo');
        print_r($fifo);

        $sistaElementet = array_pop($fifo);
        echo "Vi hämtade $sistaElementet<br>";
        print_r($fifo);

    ?>

    <h2>Super Globaler</h2>

    $_SERVER, $GET

    <?php
        print_r($_GET);
    ?>


</body>
</html>