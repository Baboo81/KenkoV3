<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class EnfantsController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Les enfants et les huiles essentilles";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'enfants.css';

        //Charger la vue et passer les styles et le titre
        $this->View('kenko-ho-themes/enfants', compact('title', 'resetCss', 'css'));
    }
}