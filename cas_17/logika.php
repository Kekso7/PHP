<?php

    if(!isset($_POST['ime']) || empty($_POST['ime']))
    {
        die("Morate proslediti ime");
    }

    $ime = $_POST['ime'];

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    $_SESSION['ime'] = $ime;

    header("Location: index.php");