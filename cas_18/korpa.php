<?php

// $_POST ['id_proizvoda'] - koji proizvod
// $_POST ['kolicina'] - koliko komada
// $_SESSION['user_id'] - ko je osoba koja narucuje
// cena - ? SELECT price FROM proizvodi WHERE id =..

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}


if(!isset($_POST['id_proizvoda']) || empty($_POST['id_proizvoda']))
{
    die("Morate uneti id proizvoda");
}

if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Morate uneti kolicina proizvoda");
}
require_once "modeli/baza.php";

$idProizvoda = $_POST['id_proizvoda'];
$kolicina = $_POST['kolicina'];
$idKorisnika = $_SESSION['user_id'];

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = $idProizvoda");
$redIzBaze = $rezultat->fetch_assoc();
$cena = $redIzBaze['cena'];
$cena = $cena * $kolicina;

$idProizvoda = $baza->real_escape_string($idProizvoda);
$kolicina = $baza->real_escape_string($kolicina);
$cena = $baza->real_escape_string($cena);
$idKorisnika = $baza->real_escape_string($idKorisnika);

$baza->query("INSERT INTO narudzbine (id_proizvoda, id_korisnika, kolicina, cena) VALUES ($idProizvoda, $idKorisnika, $kolicina, $cena)");


