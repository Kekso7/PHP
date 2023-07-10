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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/proizvodi.css">
</head>
<body>
    <div class="boxProizvoda">
         <h1 class="imeProizvoda"><?= $proizvod['ime'] ?></h1>
    <h1 class="opisProizvoda"><?= $proizvod['opis'] ?></h1>
    <p class="cenaProizvoda">Cena proizvoda: <?= $proizvod['cena'] ?></p>

    <?php if($proizvod['kolicina'] == 0): ?>
                <p class="stanjeNema">Nema na stanju</p>
            <?php else: ?>
                <p class="stanjeIma">Ima na stanju</p>
            <?php endif; ?>
    </div>
   
</body>
</html>

