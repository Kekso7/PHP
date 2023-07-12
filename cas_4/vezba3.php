<?php

$automobili = [
    "Golf 1", "Golf 2", "Golf 3"
];

if(in_array("Golf 2", $automobili)) {
    echo "Nasli smo najboljeg golfa.";
}

// Drugi nacin

$pronadjenGolf = in_array("Golf 2", $automobili);
if($pronadjenGolf) {
    echo "Nasli smo najboljeg golfa.";
}