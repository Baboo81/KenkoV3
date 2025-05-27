<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class ResetPasswordController extends Controller {
    public function show() {
        //Définir le titre de la page
        $title = "Réinitialiser votre mot de passe";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'resetPassword.css';

        //Récupérer le token depuis l'URL
        $token = $_GET['token'] ?? null;

        //Charger la vue et passer les styles et le token
        $this->View('reset-password', compact('title', 'resetCss', 'css', 'token'));
    }

    public function reset() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $token = $_POST['token'] ?? null;
            $newPassword = $_POST['password'] ?? null;
            $confirmPassword = $_POST['confirm_password'] ?? null;


            if (!$token || !$newPassword !== $confirmPassword) {
                header('Location: /reset-password?error=1');
                exit;
            }

            //Validation du token ds la DB
            //Supprimer le token utilisé 

            header('Location: /login?reset_success=1');
            exit;
        }
    }
}