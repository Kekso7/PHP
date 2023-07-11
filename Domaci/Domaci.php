<?php

$imeSajta = "Postani Programer";

$trenutnaGodina = date("Y");

$navigacija = [
[
    "glavna" => "Glavna",
    "o nama" => "O nama",
    "kontakt" => "Kontakt"
]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title> <?php echo $imeSajta ?> </title>
</head>
<body>

<h1> <?php echo $imeSajta ?> </h1>

<nav>
    <a href="#"> <?php echo $navigacija[0]["glavna"]; ?> </a>
    <a href="#"> <?php echo $navigacija[0]["o nama"]; ?> </a>
    <a href="#"> <?php echo $navigacija[0]["kontakt"]; ?> </a>
</nav>

<footer>
    <p>Copyright &copy; mojsajt <?php echo $trenutnaGodina ?> </p>
</footer>
    
</body>
</html>