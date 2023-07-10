<?php
    require_once "modeli/baza.php";

    //izvlacimo podatke iz baze
    $rezultat = $baza->query("SELECT * FROM proizvodi");

    //pretvaramo rezultate u assoc array
    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/proizvodi.css">
    <title>Document</title>
</head>
<body>
    <?php foreach($proizvodi as $proizvod): ?>
        
            <div class="boxProizvoda">
            <h1 class="ime"><?= $proizvod['ime'] ?></h1>
            <p class="opis"><?= $proizvod['opis'] ?></p>
            <p class="cena">Cena proizvoda: <?= $proizvod['cena'] ?></p>
            <p class="kolicina">Na stanju: <?= $proizvod['kolicina'] ?></p>
       
            <?php if($proizvod['kolicina'] == 0): ?>
                <p class="stanjeNema">Nema na stanju</p>
            <?php else: ?>
                <p class="stanjeIma">Ima na stanju</p>
            <?php endif; ?>
           
               <a href="proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>

        </div>
           
      
   
    <?php endforeach; ?>
</body>
</html>