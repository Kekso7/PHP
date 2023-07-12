<?php

// http://localhost/cas_5/calculator.php?broj_1=333&broj_2=2

// Global variable
// $_SERVER, $_GET, $_POST = assoc array

// ["broj_1"]=> "333" ["broj_2"]=> "2" - nacin na koji var_dump ispisuje
// ["broj_1" => "333", "broj_2" => "2"] - pravilan nacin na koji pisemo

$vrstaRacunice = $_GET["vrsta_racunice"];
$broj1 = $_GET["broj_1"];
$broj2 = $_GET["broj_2"];


if($vrstaRacunice == "Sabiranje"){

    // broj_1=333&broj_2=2&vrsta_racunice=Sabiranje
    echo $broj1 + $broj2;
}
else if($vrstaRacunice == "Oduzimanje"){

    // broj_1=32&broj_2=12&vrsta_racunice=Oduzimanje
    echo $broj1 - $broj2;
}

