<?php

namespace App\Controllers;

use App\Core\Controller;


class ContactController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Contactez-moi";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'contact.css';

        //Charger les vue et passer le titre, css
        $this->View('contact', compact('title', 'resetCss', 'css'));
    }
}