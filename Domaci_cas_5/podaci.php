<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
        <div>
           <form method="GET" action="racunanje.php">
            <input type="text" name="cena_proizvoda" placeholder="Unesite cenu proizvoda" class="unesite">
        </div>
      
        <select name="vrsta_proizvoda">
            <option>Hrana</option>
            <option>Oprema za racunare</option>
        </select>
        <div class="porez">
           <input type="checkbox" name="porez_checkbox">
           <p>cena sa porezom</p> 
        </div>
        <div class="button">
             <button>Izracunaj cenu</button>
        </div>
       
    </form> 
</div>
    </div>

</body>
</html>