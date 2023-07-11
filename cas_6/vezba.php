<?php

$proveriPin = isset($_POST["pin"]);
if($proveriPin == false) {
    die("Niste uneli pin");
}

$duzinaPina = strlen($_POST["pin"]);
if($duzinaPina < 4 || $duzinaPina > 6) {
    die("Pin mora da ima 4 karaktera, a maximum 6 karaktera");
}

echo "Uspesno ste uneli pin";

