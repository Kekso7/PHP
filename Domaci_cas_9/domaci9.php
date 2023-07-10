<?php

function izracunajPDV($broj, $PDV) {
    if ($broj <= 1) {
        die("Broj ne može biti manji od 1");
    }
    return $broj * $PDV;
}

$iznosPDV = izracunajPDV(100, 0.22);
echo "PDV iznosi $iznosPDV €";
