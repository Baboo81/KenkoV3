<?php

namespace App\Controllers;

use App\Core\Controller;


class SignupController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Inscription";
        //Joindre le style de cette page
        $resetCss = 'reset.css';
        $css = 'signup.css';
        //Charger la vue et passer le titre et le style
        $this->View('signup', compact('title', 'resetCss', 'css'));
    }
}