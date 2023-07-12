<?php

$broj = 10; // 0 = Paran, 1 = Neparan

$proveraBroja = $broj % 2;

if($proveraBroja == 0) {
    echo "Broj je paran";
}
else{
    echo "Broj je neparan";
}