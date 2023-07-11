<?php

function daLiJeBrojParan($broj) {
    $rezultat = $broj % 2;
    if($broj == 0) {
        echo "Broj ne moze biti 0";
    }
    else {
        if($rezultat == 0) {
        echo "Broj je paran";
    }
    else {
        echo "Broj je neparan";
    } 
    }
   
}

daLiJeBrojParan(0);
