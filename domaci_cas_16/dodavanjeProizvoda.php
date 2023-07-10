<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Proizvod</title>
    <link rel="stylesheet" href="css/proizvodi.css">
    
</head>
<body>
    
    <div class="box">
          <form action="modeli/proizvodi.php" method="POST">
        <p>Ime proizvoda</p>
        <input type="text" name="ime" required>
        <p>Opis proizvoda</p>
        <input type="text" name="opis" required>
        <p>Cena proizvoda</p>
        <input type="text" name="cena" required>
        <p>Slika proizvoda</p>
        <input type="text" name="slika" required>
        <p>Kolicina proizvoda</p>
        <input type="text" name="kolicina" required>
        <button>Dodaj proizvod</button>
     </form> 
    </div>
 
</body>
</html>