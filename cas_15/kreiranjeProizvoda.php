<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modeli/proizvodi.php" method="POST">
        <input type="text" name="ime" placeholder="Unesite ime proizvoda" required>
        <input type="text" name="opis" placeholder="Unesite opis proizvoda" required>
        <input type="text" name="cena" placeholder="Unesite cenu proizvoda" required>
        <input type="text" name="slika" placeholder="Unesite sliku proizvoda" required>
        <input type="text" name="kolicina" placeholder="Unesite kolicinu proizvoda" required>
        <button>Napravi proizvod</button>
     </form>
</body>
</html>