<?php

namespace App\Controllers;

use App\Core\Controller;

class KenkoWebController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "KenkoWeb - Création de site web";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'kenkoWeb.css';

        //Charge la vue et passer le titre
        $this->View('kenko-web', compact('title', 'resetCss', 'css'));

    }
}