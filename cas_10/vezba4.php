<?php

function izracunajKamatu($iznosKredita, $godina) {
    $kamata = 0;
    if($godina < 2000){
        $kamata = 0.05;
    }
    else if($godina >= 2000 && $godina <= 2010) {
        $kamata = 0.08;
    }
    else if($godina > 2010 && $godina <= 2020) {
        $kamata = 0.1;
    }
    else {
        $kamata = 0.14;
    }

    return $iznosKredita*$kamata;

}

$kredit2000 = izracunajKamatu(10000, 1999);
echo $kredit2000;

$noviKredit = izracunajKamatu(10000, 2023);
echo $noviKredit;

$kreditPre2010 = izracunajKamatu(10000, 2005);
echo $kreditPre2010;
