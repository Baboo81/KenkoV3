<?php

namespace App\Core;

class Controller {
    //Méthode pour afficher les vues
    public function view($view, $data = []) {
        //Extraire les données ds des variables
        extract($data);

        //Inclure le fichier de la vue 
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}