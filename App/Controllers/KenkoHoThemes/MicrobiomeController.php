<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class MicrobiomeController extends Controller {
    public function show() {

        //Donner un titre à la page
        $title = "Le Microbiome";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'microbiome.css';

        //Charger la vue et passer le titre, les styles
        $this->View('kenko-ho-themes/microbiome', compact('title', 'resetCss', 'css'));

    }
}