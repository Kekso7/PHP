<?php

    $automobili = ["Bmw", "Mercedes", "Audi"];
    
    array_push($automobili, "Zastava");

    echo $automobili[3];
    echo $automobili[1];
    echo $automobili[2];
    echo $automobili[0];

    $brojAutomobila = count($automobili);
    echo "Ukupno imamo $brojAutomobila automobila.";
    
?>