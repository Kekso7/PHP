<?php

function pomnozi($broj, $brojDva){
   $rezultat = $broj*$brojDva;
   return $rezultat;
}

$pomnozeniBrojevi = pomnozi(55,22);
echo $pomnozeniBrojevi;

$pomnozeniBrojevi = $pomnozeniBrojevi / 2;
echo $pomnozeniBrojevi;