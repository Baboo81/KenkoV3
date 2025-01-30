<?php 

namespace App\Controllers;//Indique que ce controller fait partie de l'espace noms App\Controllers

use App\Core\Controller;

class KenkoHoController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "KenkoHo - Bien-être & huiles essentielles";
        //Joindre les styles:
        $resetCss = 'reset.css';
        $css = 'kenkoHo.css'; 

        //Charge la vue et passer le titre
        $this->View('kenko-ho', compact('title', 'resetCss', 'css'));
    }
}