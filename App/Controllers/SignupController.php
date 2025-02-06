<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;


class SignupController extends Controller {
    public function show() {

        //Définir le titre de la page
        $title = "Inscription";
        //Joindre le style de cette page
        $resetCss = 'reset.css';
        $css = 'signup.css';
        //Charger la vue et passer le titre et le style
        $this->View('signup', compact('title', 'resetCss', 'css'));
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Démarrer la session si elle n'est pas encore active
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            //Vérification du token CSRF
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Erreur CSRF !");
            }

            //Récupération et nettoyage des données
            $username = trim(htmlspecialchars($_POST['username']));
            $email = trim(htmlspecialchars($_POST['email']));
            $password = trim($_POST['password']);

            //Vérification des champs obligatoires
            if (empty($username) || empty($email) || empty($password)) {
                die("Tous les champs doivent être remplis !");
            }

            //Vérification de la validité de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Adresse email invalide !");
            }

            //Hachage du mot de passe
            $hachedPassword = password_hash($password, PASSWORD_DEFAULT);

            //Connexion à la DB
            $db = Database::getInstance();

            //Vérification de l'email si l'email est déjà utilisé
            $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
            $stmt ->execute([$email]);

            if ($stmt->fetch()) {
                die("Cet adresse est déjà utilisée !");
            }

            //Insertion d'utilisateur en base données
            $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $success = $stmt->execute([$username, $email, $hachedPassword]);

            if ($success) {
                //Redirection vers la page d'accueil
                header("Location: /home");
                exit();
            } else {
                die("Erreur lors de l'inscription !");
            }
        }
    }
}