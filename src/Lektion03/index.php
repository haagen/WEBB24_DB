<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion 03 - Kontrollstrukturer, Funktioner, Objekt och Klasser</title>
</head>
<body>
    
    <h1>Lektion 03 - Kontrollstrukturer, Funktioner, Objekt och Klasser</h1>

    <h2>Kontrollstrukturer</h2>

    <h3>If, else, if-else satser</h3>

    <p>Vi använde vilkorssatser för att köra olika kod
        beroende på uttryck.</p>
    
    <?php
        $anvInput = 'Danmark'; // Sverige
        $countryCode = '';

        if($anvInput == 'Sverige') {
            $countryCode = 'se';
        } else if($anvInput == 'Danmark') {
            $countryCode = 'dk';
        } else {
            $countryCode = 'unknown';
        }

    ?>

    <p>Användaren har <b><?= $countryCode ?></b> som landskod!</p>

    <h3>Switch</h3>

    <p>Swith satsen använder vi när vi vill göra olika 
        saker beroende på ett värde.</p>

    <?php

        $anvInput = 'Syd Afrika';

        switch($anvInput) {
            case 'Sverige':
                $countryCode = 'se';
                break;
            case 'Danmark':     $countryCode = 'dk'; break;
            case 'Syd Afrika':  $countryCode = 'za'; break;
            default:
                $countryCode = 'unknown';
        }

    ?>

    <p>Användaren har <b><?= $countryCode ?></b> som landskod!</p>


    <h3>While</h3>

    <p>While och do-while loopar använder vi när vi har 
        ett okänt antal iterationer att göra.</p>

    <?php

        $count = 0;
        $value = 1;
        while($value < 100) {
            $value = $value * 2;    // $value *= 2;
            $count++;
        }

        $count = 0; 
        $value = 1;

        do {
            $value *= 2;
            $count++;
        } while($value < 100);

    ?>
    
    <p>Om vi dubblar 1 så behöver dubble värde <?= $count ?> gånger
        innan vi kommer över 100.</p>

    <p>Var försiktig så att din while-loop inte blir oändlig</p>

    <?php
        // $count = 0;
        // while(true) {
        //     $count++;
        // }
    ?>

    <?php

        $lista = [];
        for($i = 1; $i <= 203; $i++) {
            $lista[] = $i;
        }
        //print_r($lista);

        $countries = [
            'Sverige' => 'se',
            'Danmark' => 'dk',
            'Syd Afrika' => 'za'
        ];
        $anvInput = 'Danmark';
        //$countryCode = $countries[$anvInput];
        foreach($countries as $key => $val) {
            if($anvInput == $key) {
                $countryCode = $val;
            }
        }

    ?>

    <p>Användaren har <b><?= $countryCode ?></b> som landskod!</p>        

        <?php

        echo 10 / 0;

        ?>

</body>
</html>