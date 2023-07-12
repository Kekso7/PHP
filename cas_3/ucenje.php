<?php

    $automobili = [
        "Zastava" => ["Yugo", "Skala", "101"],
    ];

    echo $automobili["Zastava"][1];

    $osobe = [

        "kekso" => [
            "prezime" => "Krajcik",
            "godine" => 31,
            "programer" => true,
            "pravo_ime" => "Marina"
        ],

        "petar" => [
            "prezime" => "Jovanovic",
            "godine" => 41,
            "programer" => false,
            "pravo_ime" => "Petar",
            "jmbg" => 123456789
        ],
    ];

    echo $osobe["kekso"]["godine"];
    echo $osobe["petar"]["jmbg"];

    // Dodavanje osobe

    $osobe["Jelena"] = [
        "prezime" => "Nikolic",
        "godine" => 35,
        "programer" => true,
        "pravo_ime" => "Jelena"
    
    ];

    echo "Ja se zovem {$osobe['Jelena']['pravo_ime']}, a prezivam se {$osobe['Jelena']['prezime']}";

    // ispisati imena 

    $imena = array_keys($osobe); 
    var_dump($imena);

  
    
