<?php

$imena = ["Toma", "Petar", "Vlada"];

// & - element u arrayu se moze promeniti
foreach($imena as &$ime) {
    $ime = strtolower($ime);
}

var_dump($imena);