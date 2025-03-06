<?php

namespace App\Controllers\Cookies;

use App\Core\Controller;

class CookiePreferencesController extends Controller
{
    public function show()
    {
        //Titre de la page
        $title = "Gestion des cookies";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'cookiePreferences.css';

        //Charger la vue et passer le titre ainsi que les styles
        $this->View('cookies/cookie-preferences', compact('title', 'resetCss', 'css'));
    }
}