<?php

namespace App\Controllers;

use App\Core\Controller;

class ForgotPasswordController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Mot de passe oublié ?";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'forgotPassword.css';

        //Charge le vue et passe le titre, css
        $this->View('forgot-password', compact('title', 'resetCss', 'css'));
    }

    public function send() {
        //Méthode qui sera appelée lorsque le form "Mot de passe oublié" sera soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATION_EMAIL);

            if ($email) {
                header('Location: /forgot-password?success=1');
                exit;
            } else {
                header('Location: /forgot-password,erroe=1');
                exit;
            }
        }
    }
}