<?php

$imeProsledjeno = isset($_POST["ime"]);
if($imeProsledjeno == false) {
    
    die("ime nije prosledjeno");
}

$lozinkaProsledjena = isset($_POST["lozinka"]);
if($lozinkaProsledjena == false) {

    die("lozinka nije prosledjena");
}

$ime = trim($_POST["ime"]);
if($ime == "") {

    die("Morate upisati ime");
}
$lozinka = trim($_POST["lozinka"]);
if($lozinka == "") {

    die("Morate upisati lozinku");
}


echo $_POST["ime"]." ".$_POST["lozinkas"];