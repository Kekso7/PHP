<?php

//Domaci 1

$ime = strtolower("administrator");
$lozinka = "mojaSifraJeSigurna";

if($ime == "administrator" && $lozinka == "mojaSifraJeSigurna") {
    echo "Dobrodosao administrator.";
}

//Domaci 2


$currentHour = 22;

if ($currentHour >= 5 && $currentHour < 12) {
    echo "Sada je jutro.";
} 

elseif ($currentHour >= 12 && $currentHour < 20) {
    echo "Sada je podne.";
}

elseif ($currentHour >= 20 || $currentHour < 5) {
    echo "Sada je noc.";
}
