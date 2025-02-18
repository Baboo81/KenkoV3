<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class StressController extends Controller {
    public function show() {

        //Donner un titre à la page
        $title = "Le stress & les huiles essentielles";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'stress.css';

        //Charger la vue et passer le titre, les styles
        $this->View('kenko-ho-themes/stress', compact('title', 'resetCss', 'css'));

    }
}