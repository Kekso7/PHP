<?php

function izracunati($broj, $broj2){

    if($broj == 0 || $broj2 == 0) {
        die("Brojevi ne smeju biti 0");
    }
    echo $broj+$broj2;
}

izracunati(0,5);

