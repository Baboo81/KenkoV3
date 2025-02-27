<?php

namespace App\Controllers;

use App\Core\Controller;

class FoireAuxQuestionsController extends Controller {
    public function show() {
        //Définir le titre de la page
        $title = "FAQ";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'foireAuxQuestions.css';

        //Charger la vue et passer le titre et les styles
        $this->View('foireAuxQuestions', compact('title', 'resetCss', 'css'));
    }
}