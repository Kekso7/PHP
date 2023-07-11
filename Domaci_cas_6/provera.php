<?php

$imena = ["Tomo", "Petar", "Marko"];

if (isset($_POST["ime"])) {

    $ime = $_POST["ime"];
    $imeVelikaMalaSlova = strtolower($ime); 
    $imenaVelikaMalaSlova = array_map("strtolower", $imena);

    if (strlen($ime) > 3 && in_array($imeVelikaMalaSlova, $imenaVelikaMalaSlova)) {
        echo "Uspesno ste pronasli korisnika";
    } else {
        echo "Nismo pronasli korisnika";
    }
}
