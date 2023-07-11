<?php

$navigacija = [
    "Glavna" => "index.php",
    "O nama" => "AboutUs.php",
    "Kontakt" => "Contact.php"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci cas 8</title>
  
</head>

<body>
   <?php foreach($navigacija as $nav => $ishod): ?>
    
       <a href="<?= $ishod; ?>"> <?= $nav; ?></a> 
    

    

    <?php endforeach; ?>
</body>
</html>

