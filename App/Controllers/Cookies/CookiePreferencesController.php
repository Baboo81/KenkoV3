<?php

namespace App\Controllers;

use App\Core\Controller;

class CookiePreferencesController extends Controller
{
    public function show()
    {
        //Titre de la page
        $title = "Gestion des cookies";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'politiquesCookies.css';

        //Charger la vue et passer le titre ainsi que les styles
        $this->View('politiquesCookies', compact('title', 'resetCss', 'css'));
    }
}