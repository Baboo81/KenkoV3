<?php

namespace App\Controllers;

class LogoutController {
    public function logout() {
        //Démarrer la session si elle ne l'est pas 
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //Ajouter un message de succès avant de détruire la session
        $_SESSION['message'] = [
            'type' => "succes",
            'text' => "Vous êtes bien déconnecté !"
        ];

        //Détruire la session
        session_unset();
        session_destroy();

        //Redirection vers la page d'accueil après la deconnexion
        header("Location: /");
        exit();

    }
}
