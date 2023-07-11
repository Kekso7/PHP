<?php

function kalkulacijaPopusta($cena) {
    return $cena*0.1;
}

$brojevi = [250, 330, 1000, 2000, 5000];
$popusti = [];

foreach($brojevi as $broj) {
    $popust = kalkulacijaPopusta($broj);
    array_push($popusti, $popust);

}

$ukupanPopust = array_sum($popusti); // 25+33+100+200+500
echo "Ukupan popust za danasnji dan je $ukupanPopust";
