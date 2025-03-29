<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class NutrimentsController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Établir de bonnes bases";
        //Joindre les styles
        $resectCss = 'reset.css';
        $css = 'nutriments.css';
        
        //Charger le vue et passer le titre et les styles
        $this->View('kenko-ho-themes/nutriments', compact('title', 'resetCss', 'css'));
    }
}