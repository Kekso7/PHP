<?php

$automobili = [
    "Zastava" => [
        "model" => "Yugo 55",
        "godiste" => 1995
    ],
    "Renault" => [
        "model" => "Megane RS",
        "godiste" => 2014
    ],
    "Toyota" => [
        "model" => "Rav4",
        "godiste" => 2021
    ],
];

$trenutnaGodina = date("Y");

foreach($automobili as $marka => $auto) {

    $godiste = $auto["godiste"];
    
    $starostAuta = $trenutnaGodina-$godiste;
    $starost = "";

    if ($starostAuta <= 5) {
        $starost = "nov auto";
    }
    else if($starostAuta > 5 && $starostAuta <= 10){
        $starost = "noviji auto";
    }
    else if($starostAuta > 10 && $starostAuta <= 20) {
        $starost = "stariji auto";
    }
    else {
        $starost = "old timer";
    }

    echo $auto['model']." je $starost";
}