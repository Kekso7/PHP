<?php

function izracunajDostava($cena, $grad) {
    $cenaDostave = 0;
    $dostava = [
    "Subotica" => 220,
    "Pancevo" => 10,
    "Sarajevo" => 292,
    "Split" => 799
];
    $gradPostoji = array_key_exists($grad, $dostava);
    if($gradPostoji){
        $rastojanje = $dostava[$grad];
        
        if($rastojanje <= 100) {
            $cenaDostave = 200;
        }
        else if($rastojanje > 100 && $rastojanje <= 200) {
            $cenaDostave = 350;
        }
        else {
            $cenaDostave = 500;
        }

    }
    else {
        $cenaDostave = null;
    }

    return $cenaDostave;

}
$subotica = izracunajDostava(2000, "Subotica");
echo $subotica;
$split = izracunajDostava(2000, "Split");
echo $split;
$pancevo = izracunajDostava(2000, "Pancevo");
echo $pancevo;

