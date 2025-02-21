<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class ContactController extends Controller {
    public function show() {
        // Démarrer la session si elle n'est pas déjà démarrée
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Générer un token CSRF sécurisé s'il n'existe pas encore
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        // Définir le titre de la page et les styles
        $title = "Contactez-moi";
        $resetCss = 'reset.css';
        $css = 'contact.css';
        $csrf_token = $_SESSION['csrf_token']; // Assigner le token à une variable

        // Charger la vue et passer les variables
        $this->View('contact', compact('title', 'resetCss', 'css', 'csrf_token'));
    }

    public function handleForm() {
        // Démarrer la session si elle n'est pas déjà démarrée
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Vérifie si le formulaire est bien envoyé
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier le token CSRF
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Erreur CSRF détectée !");
            }

            // Régénérer l'ID de session pour plus de sécurité
            session_regenerate_id(true);

            // Récupération et assainissement des données
            $name = trim(strip_tags($_POST['name'] ?? ''));
            $firstName = trim(strip_tags($_POST['firstName'] ?? ''));
            $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
            $message = trim(strip_tags($_POST['message'] ?? ''));

            // Validation du nom et prénom (uniquement lettres et espaces)
            if (!preg_match("/^[a-zA-Z\s]+$/", $name) || !preg_match("/^[a-zA-Z\s]+$/", $firstName)) {
                die("Le nom et le prénom doivent contenir uniquement des lettres et des espaces !");
            }

            // Vérification que les champs ne sont pas vides
            if (empty($name) || empty($firstName) || empty($email) || empty($message)) {
                die("Tous les champs doivent être remplis !");
            }

            // Connexion à la base de données
            $db = Database::getInstance();
            if (!$db) {
                die("Erreur de connexion à la base de données !");
            }

            // Insérer les données avec une requête préparée
            $stmt = $db->prepare("INSERT INTO contacts (name, first_name, email, message, created_at) VALUES (?, ?, ?, ?, NOW())");
            $result = $stmt->execute([$name, $firstName, $email, $message]);

            if ($result) {
                header("Location: /message");
                exit;
            } else {
                die("Erreur lors de l'enregistrement du message.");
            }
        }
    }

    public function listMessages() {
        // Connexion à la base de données
        $db = Database::getInstance();

        // Récupérer les messages de la base de données
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Définir les variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'message.css';

        // Charger la vue et lui passer les messages
        $this->View('message', compact('title', 'resetCss', 'css', 'messages'));
    }
}
