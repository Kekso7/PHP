<?php

function izracunajPopust($cena, $popust) {
    $popust = $popust/100; // 22 = 0.22
    $rezultat = $cena * $popust; // 1500 * 0.22
    return $rezultat;
}

$izracunatPopust = izracunajPopust(1500,22);
$izracunatPopustDva = izracunajPopust(2000,10);
$izracunatPopustTri = izracunajPopust(3000,15);

$totalniPopust = $izracunatPopust+$izracunatPopustDva+$izracunatPopustTri;
echo "Ukupno popusta danas je bilo $totalniPopust";


