<?php

    if(!isset($_GET['email']) || empty($_GET['email']))  // Proveravamo da li email nije unet ili da li je prazan
    {
        die("Niste uneli email adresu"); // Ispisi gresku - zaustavi kod da ne ide dalje
    }

    require_once "baza.php"; // ucitavanje baza.php jer nam je tu konekcija ka bazi

    $email = $_GET['email']; // napravi varijablu $email da ne kucas svaki put $_GET['email']

    // daj mi sve korisnike koji imaju email koju je korisnik uneo
    // rezultat nase pretrage iz baze stavljamo u varijablu $rezultat
    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email LIKE '%$email%'");
    
    // num_rows -> koliko je korisnika nasao
    if($rezultat->num_rows >= 1) // ako JE nasao 1 ili vise korisnika
    {
        echo "Nasli smo ".$rezultat->num_rows." korisnika sa ovom email adresom"; // ispisi poruku
    }
    else // ako NIJE nasao 1 ili vise korisnika - nasao je 0
    {
        echo "Nismo nasli korisnika sa ovom email adresom"; // ispisi poruku
    }