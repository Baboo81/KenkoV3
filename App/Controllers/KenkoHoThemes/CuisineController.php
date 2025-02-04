<?php

namespace App\Controllers\KenkoHoThemes;

use App\Core\Controller;

class CuisineController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Les H.E dans la cuisine";
        //Joindre les styles 
        $resetCss = "reset.css";
        $css = "cuisine.css";

        //Charger la vue et passer le titre, les styles
        $this->View('kenko-ho-themes/cuisine', compact('title', 'resetCss', 'css'));

    }
}