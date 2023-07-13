<?php

if(session_status() === PHP_SESSION_NONE)
{
    session_start();
}

if(!isset($_SESSION['ulogovan']))
{
    die("Morate biti ulogovani da bi ste videli stranicu");
}

require_once "modeli/baza.php";

$userId = $_SESSION['user_id'];
$rezultat = $baza->query("SELECT * FROM narudzbine WHERE id_korisnika = $userId");
$narudzbine = $rezultat->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($rezultat->num_rows == 0): ?>
    <h1>Nemate ni jedan proizvod u korpi</h1>
    <?php else: ?>
   

    <?php foreach($narudzbine as $narudzba): ?>
        <div>
            <p>Kolicina: <?= $narudzba['kolicina'] ?></p>
            <p>Cena: <?= $narudzba['cena'] ?></p>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>