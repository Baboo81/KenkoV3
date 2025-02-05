<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class EmotionController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Les émotions & les huiles essentielles";
        //Joindre les styles
        $resetCss = 'resetCss.css';
        $css = 'emotion.css';

        //Charger la vue et passer le titre et les styles
        $this->View('kenko-ho-themes/emotions', compact('title', 'resetCss', 'css'));
    }
}