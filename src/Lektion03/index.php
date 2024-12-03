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

    <h2>Funktioner</h2>

    <p>Dela upp större kodblock eller återanvända kod genom att skapa funktioner.</p>

    <?php

        function funktionsNamn($parameter1, $parameter2) {
            echo "<$parameter2>$parameter1</$parameter2>";
        }

        funktionsNamn("Detta är en paragraf", "p");
        
    ?>

    <ul>
        <?php
            for($i=1; $i<=5; $i++) {
                funktionsNamn("Item nummer $i", "li");
            }
        ?>
    </ul>

    <?php
        
        // Anonyma funktioner

        $max = function($tal1, $tal2) {
            if($tal1 > $tal2) {
                return $tal1;
            }
            return $tal2;
        };

        $min = function($tal1, $tal2) {
            return $tal1 > $tal2 ? $tal2 : $tal1;
        };

        function checkNumbers($funktion, $tal1, $tal2) {
            return $funktion($tal1, $tal2);
        }

        $tal1 = 43; $tal2 = 50;
        echo "Av $tal1 och $tal2 är " . $min($tal1, $tal2);
        echo " minst och " . $max($tal1, $tal2) . " är störst.<br>"; 

        echo "Av $tal1 och $tal2 är " . checkNumbers($min, $tal1, $tal2);
        echo " minst.<br>";

    ?>


        <p>En funktion kan ha ett okänt antal argument. Då prefixas
            parametern med ...</p>

    <?php

        function summa(...$tal) {
            //print_r($tal);
            $sum = 0; 
            foreach($tal as $t) {
                $sum += $t;
            }
            return $sum;
        }

        echo "Summan av 1+1+1+1+1+1+1+1+1+1 = " . summa(1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
        echo "<br>";
    ?>

    <p>Det är ofta snyggt att skriva rekursiva funktioner, men var
        försiktig, det är lätt att skriva fel och försätta sig i en
        <b>oändlig loop</b>.</p>

    <?php

        function rekursiveSumma($maxTal) {
            //echo "$maxTal<br>";
            if($maxTal <= 1) return 1;
            return$maxTal + rekursiveSumma($maxTal - 1);
        }

        $m = 10;
        echo "Summan av talen mellan $m och 1 är " . rekursiveSumma($m);
        echo "<br>";

    ?>


    <h2>Klasser och objekt</h2>

    <p>Klasser och objekt används i OOP (Objekt orienterad programmering)</p>

    <?php

        class Fruit {

            public $name; 
            public $color;

            public function eat($who) {
                return "$who eat a $this->color $this->name";
            }

        }

        $jg = new Fruit();
        $jg->name = "Strawberry";
        $jg->color = "Red";
        echo $jg->eat("Martin") . "<br>";

        $b = new Fruit();
        $b->name = "Banan";
        $b->color = "Yellow";
        echo $b->eat("Åke") . "<br>";


        class Animal {

            private $name; 

            function __construct($name) {
                $this->name = $name;
                echo "$this->name was constructed<br>";
            }

            function __destruct() {
                echo "$this->name was deconstructed<br>";
            }

            function getName() {
                return $this->name; 
            }

        }

        $myAnimal = new Animal('Silverfisk');
        echo "Namnet på mitt djur är: " . $myAnimal->getName() ."<br>";


        class Dog extends Animal {

            private $breed;
            public $description; 

            function __construct($name, $breed) {
                parent::__construct($name);
                $this->breed = $breed;
                $this->description = "$name is a $breed";
            }

            function setBreed($breed) {
                $this->breed = $breed;
                $this->description = parent::getName() . " is a $breed";
            }

            function getBreed($breed) {
                return $this->breed;
            }

        }

        $myDog = new Dog('Pucko', 'Border Collie');
        echo "Min hund heter: " . $myDog->getName() . "<br>";
        echo "Beskrivning: $myDog->description<br>";
        
        $myDog->setBreed('Pudel');
        echo "Beskrivning: $myDog->description<br>";

    ?>

        <div style="height:1000px">&nbsp;</div>
</body>
</html>