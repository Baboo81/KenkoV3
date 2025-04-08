<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class ReikiController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Le Reiki";
        //Joindre les styles
        $resetCss = "reset.css";
        $css = "reiki.css";

        //Charger la vue et passer le titre ainsi que les CSS
        $this->View('kenko-ho-themes/reiki', compact('title', 'resetCss', 'css'));
    }
}