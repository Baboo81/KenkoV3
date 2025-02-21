<?php

namespace App\Controllers;

use App\Core\Controller;

class PolitiquesCookiesController extends Controller
{
    public function show()
    {
        //Titre de la page
        $title = "Politiques pour nos cookies";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'politiquesCookies.css';

        //Charger la vues et passer le titre ainsi que les styles
        $this->View('politiquesCookies', compact('title', 'resetCss', 'css'));
    }
}