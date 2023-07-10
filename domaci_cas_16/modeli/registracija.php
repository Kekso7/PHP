<?php

if(!isset($_POST['email']) || empty($_POST['email'])) {
    die("Morate da ukucate email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra'])) {
    die("Morate da ukucate sifru");
}

$email = $_POST['email'];
$sifra = password_hash($_POST['sifra'], PASSWORD_BCRYPT);

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat->num_rows >= 1) {
    die("Postoji korisnik sa ovom email adresom");
}
else {
    echo "Uspesno ste se registrovali";
    $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$sifra')");
}

