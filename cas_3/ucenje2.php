<?php

$osobe = [
    // 0
[
    "ime" => "Marina",
    "prezime" => "Krajcik",
    "godiste" => 1992
],

// 1
[
    "ime" => "Tomislav",
    "prezime" => "Nikolic",
    "godiste" => 1993
],
];


$trenutnaGodina = date("Y");
$marinaGodine = $trenutnaGodina - $osobe[0]["godiste"];
echo "Marina ima $marinaGodine godinu.";