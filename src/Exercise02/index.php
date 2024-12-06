<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Övning 2 - PHP</title>
</head>
<body>

    <h1>Övning 2 - PHP</h1>

    <h2>1. Variabler och operatorer</h2>

    <?php
        // 1
        $firstName = 'Martin';
        $age = 27;
        $redCar = false;
        $screenHeight = 22.0;
        $screenWidth = 32.2;

        // 2
    ?>
        Jag heter <?= $firstName ?> och jag är <?= $age ?> år gammal. Jag har
        <?= $redCar ? '' : ' inte ' ?> en röd bil.
    <?php
        echo "Min laptop har en skärm, dess höjd är $screenHeight och dess bredd är $screenWidth.<br>";

        // 3
    ?>

    <table>
        <tr>
            <th>Variabelnamn</th>
            <th>Datatyp</th>
        </tr>
        <tr>
            <td>$firstName</td>
            <td><?= gettype($firstName) ?></td>
        </tr>
        <tr>
            <td>$age</td>
            <td><?= gettype($age) ?></td>
        </tr>
        <tr>
            <td>$redCar</td>
            <td><?= gettype($redCar) ?></td>
        </tr>
        <tr>
            <td>$screenHeight</td>
            <td><?= gettype($screenHeight) ?></td>
        </tr>
    </table>

    <?php

        // 4
        define('PI', 3.14159);

        // 5
        echo "Min laptops skärm har ytan = " . ($screenHeight*$screenWidth) . " cm<sup>2</sup><br>";

        // 6
        $omkrets = 2 * $screenHeight + 2 * $screenWidth;
        echo "Min laptops skärm har $omkrets cm i omkrets<br>";

        // 7
        $helaNamnet = $firstName . ' Haagen';
        echo "Jag heter $helaNamnet<br>";

        const VAT = 25;
        $price = 823.50;
    ?>
    <table>
        <tr><td>Adventsstjärna</td><td><?= $price ?></td></tr>
        <tr><td>Moms</td><td><?= number_format(-$price +$price*(100+VAT)/100, 2) ?></td></tr>
        <tr><td>Totalt</td><td><?= number_format($price * (100+VAT)/100, 2) ?></td></tr>
    </table>

    <hr>

    <h2>Listor och Arrayer</h2>

    <?php

        $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        print_r($lista);

        echo "<br>";

        $lista[3] = 8;
        $lista[7] = 4;
        print_r($lista);

        echo "<br>";

        unset($lista[4], $lista[5]);
        print_r($lista);

        echo "<br>";

        echo "Vi har " . count($lista) . " värden i vår lista!<br>";


        $firstNumber = array_shift($lista);
        $lastNumber = array_pop($lista);
        array_unshift($lista, $lastNumber);
        array_push($lista, $firstNumber);

        print_r($lista);

        ?>

    <hr>

    <h2>Kontrollstrukturer</h2>

    <?php

        // 1
        $tal = 5;

        if ($tal % 2 === 0) {
            echo "$tal är ett jämnt tal!<br>";
        } else {
            echo "$tal är ett udda tal!<br>";
        }

        // 2
        $price = 0;
        $age = 32;
        if($age >= 0 && $age <= 8) {
            $price = 0;
        } else if($age <= 65) {
            $price = 120;
        } else {
            $price = 75;
        }
        echo "Stina är $age år och därför kostar inträdet $price kronor.<br>";

        // 3
        $day = 'LörDag';
        $helgdag = false; 

        switch(strtolower($day)) {
            case 'lördag':
            case 'söndag':
                $helgdag = true;
                echo "$day är en helgdag"; 
                break;
            default:
                $helgdag = false;
                echo "$day är inte en helgdag" ;
        }

        echo "<br>";

        // 4
        $summa = 0;
        $cnt=0;
        while($summa <= 5) {
            $summa += $lista[$cnt];
            $cnt++;
        }
        
        echo "Summan blev $summa efter $cnt ittertioner<br>";

        // 5
        $summa = 0;
        do {
            $rnd = rand(1, 10);
            echo "Slumptal: $rnd<br>";
            $summa += $rnd;
        } while($summa <= 23);

        echo "Summan blev $summa<br>";

        // 6
        $reversedLista = [];
        for($i=10; $i > 0; $i--){
            $reversedLista[] = $i;
        }

        print_r($reversedLista);
        echo "<br>";

        $summa = 0;
        for($i=1;$i<101;$i++) {
            $summa += $i;
        }
        echo "Summan av alla tal mellan 1 och 100 blir = $summa<br>";

        // 7
        $food = [ 'Köttbullar', 'Prinskorv', 'Taccos', 'Brunabönor', 'Spagetti', 'Pizza', 'Sushi'];
        $days = ['Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag', 'Söndag'];
        ?>

        <table>
            <thead>
                <tr>
                    <th>Dag</th>
                    <th>Maträtt</th>
                </tr>
            </thead>
            <tbody>

    <?php

        $usedFoods = [];

        // Gå igenom dag för dag
        foreach($days as $day) {
    
            echo "<tr>";
            echo "  <td>$day</td>";

            do {
                $rndIndex = rand(0, count($food) - 1); // slumpa ett tal mellan 0 och 6
            } while(in_array($rndIndex, $usedFoods));  // Finns talet i listan $usedNumbers

            $usedFoods[] = $rndIndex;   // Lägg till det slumpade talet i usedFoods så att vi inte använder det igen
            
            echo "  <td>$food[$rndIndex]</td>";
            echo "</tr>";


        }

    ?>
            </tbody>
        </table>

    <hr>

</body>
</html>