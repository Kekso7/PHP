<?php

$godinaRodjenja = 1992;

if($godinaRodjenja == 1993) {
    echo "Imate 30 godina";
}

else if($godinaRodjenja == 1999) {
    echo "Imate 24 godine";
}

else{

   $trenutneGodine = date("Y") - $godinaRodjenja; 
    echo "Imate $trenutneGodine godina.";
}

