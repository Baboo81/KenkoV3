<?php

session_start();

// Code correct haché (SHA256)
$code_valide_hache = hash('sha256', 'Zi35Fs7@');

// Vérifie si un code a été envoyé
if (isset($_POST['code'])) {
    // Hacher le code saisi par l'utilisateur
    $code_saisi_hache = hash('sha256', $_POST['code']);
    
    // Comparer les deux codes hachés
    if ($code_saisi_hache === $code_valide_hache) {
        $_SESSION['kenko_access'] = true; // Stocke l'accès en session
        echo "success";
    } else {
        echo "error";
    }
}