<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class DixHuilesDeBaseController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Les 10 huiles de base";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'dixHuilesDeBase.css';

        //Charger la vue et passer le titre, les styles
        $this->View('kenko-ho-themes/dix-huiles-de-base', compact('title', 'resetCss', 'css'));

    }
}