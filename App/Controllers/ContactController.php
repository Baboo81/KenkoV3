<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

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

    public function listMessages() {
        $db = Database::getInstance();

        //Récupère les messages de la base de données
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $message = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Définir les variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'messages.css';

        //Charger la vue et lui passer les messages
        $this->View('messages', compact('title', 'resetCss', 'css', 'messages'));
    }
}