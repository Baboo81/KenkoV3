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

        //Démarrer une session : (une session permet de stocker des infos entre les requêtes HTTP, des variables utilisateur, des jetons CSRF ou des msg de confirmation)
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }


        //Vérifie que le form est bien envoyé
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Vérifie si le token CSRF : le token = signature du formulaire
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Erreur CSRF !");
            }

            //Récupèration + assainissement des données du form
            //trim : supprime les espaces que l'utilisateur aurai mis
            //strip_tags : supprime les balises HTML qu'un utilisateur malveillant aurait mis, évite les attaques de types : XSS
            $name = trim(strip_tags( $_POST['name'] ?? ''));
            $firstName = trim(strip_tags($_POST['firstName'] ?? ''));
            $email = trim(filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL));
            $message = trim(strip_tags($_POST['message'] ?? ''));

            //Validation supplémentaire pour les champs : nom et prénoms (nous voulons uniquement des lettres et espaces)
            if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/",
            $firstName)) {
                die("Le nom ainsi que le prénom doivent contenir des lettres et des espaces !");
            }

            //Validation des données + vérification que les champs ne soit pas vides 
            if (empty($name) || empty($firstName) || empty($email) || empty($message)) {
                die("Tous les champs doivent être remplis");

                //Connexion à la DB
                $db = Database::getInstance();

                //Vérifie si la connexion est établie
                if (!$db) {
                    die("Erreur de connexion !");
                }
            

            // Insérer les données avec une requête préparée
            $stmt = $db->prepare("INSERT INTO contacts (name, first_name, email, message, created_at) VALUES (?, ?, ?, ?, NOW())");
            $result = $stmt->execute([$name, $firstName, $email, $message]);

            if ($result) {
                header("Location: /message");
                echo "Message bien enregistré en base de données !";
            } else {
                echo "Erreur lors de l'insertion.";
            }
        } else {
            echo "Veuillez remplir tous les champs du formulaire !";
        }
    }
}

    public function listMessages() {
        $db = Database::getInstance();

        //Récupère les messages de la base de données
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
        //Définir les variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'message.css';

        //Charger la vue et lui passer les messages
        $this->View('message', compact('title', 'resetCss', 'css', 'messages'));
    }
}