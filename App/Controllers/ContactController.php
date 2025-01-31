<?php

namespace App\Controllers;

use App\Core\Controller;


class ContactController extends Controller {
    public function show() {

        //Défini le titre de la page
        $title = "Contactez-moi";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'contact.css';

        //Charger les vue et passer le titre, css
        $this->View('contact', compact('title', 'resetCss', 'css'));
    }

    public function handleForm() {

        //Vérifie que le form est bien envoyé
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Récupère les donnéesdu form
            $name = $_POST['name'] ?? '';
            $firstName = $_POST['firstName'] ?? '';
            $email = $_POST['email'] ?? '';
            $message = $_POST['message'] ?? '';

            //Validation des données
            if ($name && $firstName && $email && $message) {

                echo "Message envoyé : $name, $firstName, $email, $message";
            } else {
                echo "Veuillez remplir tous les champs du formulaire !";
            }
        }
    }
}