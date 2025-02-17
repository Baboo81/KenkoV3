<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class PeauController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "La peau et les huiles essentilles";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'peau.css';

        //Charger la vue et passer les styles et le titre
        $this->View('kenko-ho-themes/peau', compact('title', 'resetCss', 'css'));
    }
}


