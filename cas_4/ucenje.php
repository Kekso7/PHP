<?php

$ime = "Marina";
$godine = 31;
$visina = 175;

if($ime == "Marina") {
    echo "Pozdrav Marina";
}

if($godine == 18) {
    echo "Imate 18 godina";
}
else if ($godine == 31){
    echo "Imate 31 godina";
}

if($visina < 170) {
    echo "Niski ste";
}
else{
    echo "Visoki ste";
}

$godinaRodjenja = 1992;

if($godinaRodjenja == 1993) {
    echo "Imate 30 godina";
}

else if($godinaRodjenja == 1999) {
    echo "Imate 24 godine";
}

else{
    echo "Imate X godina";
}

// BOOL_PROVERA

$programer = true;

if($programer) {
    echo "Vi ste programer.";       // if($programer)-true, if(!programer)-false
}

else {
    echo "Vi niste programer.";
}


// ILI 

$name = "Maki";

if($name == "Maki") {
    echo "Welcome";
}
else if ($name == "Dada") {
    echo "Welcome";
}
else {
    echo "You are not Maki or Dada";
}

// Drugi nacin za ILI

if($name == "Maki" || $name == "Dada") {
    echo "Welcome";
}
else {
    echo "You are not Maki or Dada";
}




