<?php

namespace App\Controllers;

use App\Core\Controller;
class KenkoWebController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "KenkoWeb - Création de site web";

        //Charge la vue et passe le titre
        $this->View('kenko-web', compact('title'));

    }
}