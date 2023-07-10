<?php

function izracunajPDV($broj, $PDV) {
    if (!is_numeric($broj) || $broj <= 1) {
        die("Broj mora biti numericka vrednost");
    }
    return $broj * $PDV;
}

$vrednost = "toma"; 

if (is_numeric(strval($vrednost))) {
    $iznosPDV = izracunajPDV($vrednost, 0.22);
    echo "PDV iznosi $iznosPDV €";
} 
else {
    echo "Broj mora biti numericka vrednost";
}