<?php

$cena_proizvoda = $_GET["cena_proizvoda"];
$vrsta_proizvoda = $_GET["vrsta_proizvoda"];

$porezCheckbox = isset($_GET["porez_checkbox"]);

$hrana = 50;
$oprema = 350;

$porez = 0.1; // 10% porez

if ($vrsta_proizvoda == "Hrana") {
    $cenaUkupno = $cena_proizvoda + $hrana;
} 
else if ($vrsta_proizvoda == "Oprema za racunare") {
    $cenaUkupno = $cena_proizvoda + $oprema;
}

$iznosNula = 0;

if ($porezCheckbox) {
    $iznosNula = $cenaUkupno * $porez;
}

$ukupno = $cenaUkupno + $iznosNula;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="racunanje.css">
</head>
<body>
    <div class="container">
<?php

echo "Cena proizvoda: $cena_proizvoda <br>";
echo "Vrsta proizvoda: $vrsta_proizvoda <br>";
echo "Ukupna cena bez poreza: $cenaUkupno <br>";

if ($porezCheckbox) {
    echo "Porez: $iznosNula <br>";
}

echo "Ukupna cena: $ukupno";
?>
</div>
</body>
</html>

