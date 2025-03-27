<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class DouleurController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "La douleur & les huiles essentielles";
        //Joindre les styles
        $resectCss = "reset.css";
        $css = "douleur&HE.css";
        
        //Charger le vue et passer le titre et les styles
        $this->View('kenko-ho-themes/douleur', compact('title', 'resetCss', 'css'));
    }
}