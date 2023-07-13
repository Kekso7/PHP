<?php

if(!isset($_GET['id']) || empty($_GET['id'])) {
    die("Fali id proizvoda");
}

require_once "modeli/baza.php";

$idProizvoda = $_GET['id'];

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = $idProizvoda");

if($rezultat->num_rows == 0) {
    die("ovaj proizvod ne postoji");
}

$proizvod = $rezultat->fetch_assoc();

if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1><?= $proizvod['ime'] ?></h1>
    <h1><?= $proizvod['opis'] ?></h1>
    <p>Cena proizvoda: <?= $proizvod['cena'] ?></p>

    <?php if($proizvod['kolicina'] == 0): ?>
                <p>Nema na stanju</p>
            <?php else: ?>
                <p>Ima na stanju</p>
            <?php endif; ?>

            <?php if(isset($_SESSION['ulogovan'])): ?>
                <form method="POST" action="korpa.php">
                    <input type="number" name="kolicina" placeholder="Unesite kolicinu proizvoda">
                    <input type="hidden" name="id_proizvoda" value="<?= $proizvod['id']?>">
                    <button>Dodaj u korpu</button>
                </form>

            <?php else: ?>
                <a href="login.php" class="button">Kliknite da se ulogujete kako bi dodali u korpu</a>
            <?php endif; ?>
            
</body>
</html>

