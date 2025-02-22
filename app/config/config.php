<?php
    ini_set('log_errors', 1);  // Active l'enregistrement des erreurs
    ini_set('error_log', '/../../php_errors.log');  // Définir le chemin du fichier de log
    error_reporting(E_ALL);  // Activer tous les types d'erreurs pour l'enregistrement

    //Test pour vérifier si les logs fonctionnent
    error_log("Test de log : Ceci est un message de test dans php_errors.log");
?>
