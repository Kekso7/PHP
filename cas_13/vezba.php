<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="baza.php">
        <input type="text" name="ime_proizvoda" placeholder="ime" required>
        <input type="text" name="opis" placeholder="opis" required>
        <input type="number" name="cena" placeholder="cena" required>
        <input type="number" name="kolicina" placeholder="kolicina" required>
        <input type="text" name="datum_nabavke" placeholder="datum nabavke" required>
        <button>Dodaj proizvod</button>
    </form>
</body>
</html>