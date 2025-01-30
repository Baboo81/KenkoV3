<?php

namespace App\Controllers;

use App\Core\Controller;

class QuiSuisJeController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Qui suis-je";

        //Charger la vue et passer le titre
        $this->View('quiSuis-je', compact('title'));
    }
}