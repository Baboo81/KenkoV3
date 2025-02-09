<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class SettingsController extends Controller {
    public function show(){

        //Nommer la page, joindre les styles
        $title = "Paramètres";
        $resetCss = 'reset.css';
        $css = 'settings.css';

        //Charger la vues et passer : le titre, les styles
        $this->View('settings', compact('title', 'resetCss', 'css'));

    }

    public function settings() {
        session_start();

        //Vérifie si l'utilisateur est connecté
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }
    }
}