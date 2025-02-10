<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;


class SignupController extends Controller {
    public function show() {
        //Démarrer la session si elle ne l'est pas
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //Générer un token CSRF unique et le stocker en session
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));


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
            unset($_SESSION['csrf_token']);//Supprime le token apès vérification

            //Récupération et nettoyage des données
            $username = trim(htmlspecialchars($_POST['username']));
            $email = trim(htmlspecialchars($_POST['email']));
            $password = trim($_POST['password']);

            //Vérification des champs obligatoires
            if (empty($username) || empty($email) || empty($password)) {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Tous les champs sont obligatoires !'
                ];
                header("Location: /signup");
                exit();
            }

            //Vérification de la validité de l'email
            if (!$email) {
               $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Adresse email invalide !'
               ];
               header("Location: /signup");
            }

            //Hachage du mot de passe
            $hachedPassword = password_hash($password, PASSWORD_DEFAULT);

            //Connexion à la DB
            $db = Database::getInstance();

            //Vérification de l'email si l'email est déjà utilisé
            $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
            $stmt ->execute([$email]);

            if ($stmt->fetch()) {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Cet email est déjà utilisé !'
                ];
                header("Location: /signup");
                exit();
            }

            //Insertion d'utilisateur en base données
            $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $success = $stmt->execute([$username, $email, $hachedPassword]);

            //Ajouter un message de succès
            $_SESSION['message'] = [
                'type' => 'success',
                'text' => 'Inscription réussie ! Vous pouvez à présent vous connecter !'
            ];

            //Redirection vers la page de connexion
            header("Location: /login");
            exit();
        }
    }
}