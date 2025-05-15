<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    //Vérifie si l'utilisateur a bien entré le code
    if (!isset($_SESSION['kenko_access']) || $_SESSION['kenko_access'] !== true) {
        header("Location: home"); //redirection vers la page d'accueil
        exit();
    }

?>  