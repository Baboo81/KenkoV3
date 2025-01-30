<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {

        //Défini le titre de la page
        $title = "Accueil - Bienvenue sur le site Kenko";

        //Charger la vue et passer le titre
        $this->View('home', compact('title'));
    }
}