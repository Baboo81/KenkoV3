<?php

namespace App\Controllers;

class ForgotPasswordController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Mot de passe oublié ?";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'forgotPassword.css';

        //Charge le vue et passe le titre, css
        $this->View('forgotPassword', compact('title', 'resetCss', 'css'));
    }
}