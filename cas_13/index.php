<?php

    $baza = mysqli_connect("localhost", "root", "", "prvi_cas");

    if(mysqli_connect_error()) {
        die("Desila se greska prilikom konektovanja na bazu podataka");
    }

    // mysqli_query($baza, "INSERT INTO korisnici (email, lozinka, datum_rodjenja) VALUES ('test2@gmail.com', 'admin123', '1993-02-02')");

    $ime = "Crveni krompir";
    $opis = "Crveni krompir najboljeg kvaliteta";
    $cena = 150;
    $datumNabavke = "2023-02-01";
    $kolicina = 22;

    $baza->query("INSERT INTO proizvodi (ime, opis, cena, dan_nabavke, kolicina) VALUES ('$ime', '$opis', $cena, '$datumNabavke', $kolicina)");