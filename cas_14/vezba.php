<?php

    require_once "baza.php";

    $rezultat = $baza->query("SELECT * FROM proizvodi");

    if($rezultat->num_rows > 0) {
        echo "Ukupno smo nasli proizvoda: ".$rezultat->num_rows;

        $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
        
        foreach($proizvodi as $proizvod) {
            echo $proizvod['ime'];
        }
    }
    else {
        echo "Nismo nasli nijedan proizvod";
    }