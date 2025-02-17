<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class SommeilController extends Controller {
    public function show() {
        //Définir le titre de la page
        $title = "Le sommeil";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'sommeil.css';

        //Charger la page et passer les styles
        $this->View('kenko-ho-themes/sommeil', compact('title', 'resetCss', 'css'));
    }
}