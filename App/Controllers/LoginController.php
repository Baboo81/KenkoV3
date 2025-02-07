<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class LoginController extends Controller {
    public function show() {
        // Démarrer la session si elle n'est pas déjà démarrée
         if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Vérifier si l'utilisateur est déjà connecté, sinon afficher le formulaire de login
        if (isset($_SESSION['user_id'])) {
            // Rediriger vers la page d'accueil si l'utilisateur est déjà connecté
            header('Location: /home');
            exit();
        }

        //Définir le title
        $title = "Login";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'login.css';

        //Charger la vue et passer les styles et le titre
        $this->View('login', compact('title', 'resetCss', 'css'));
    }

    public function authenticate() {
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Démarrer la session si elle n'est pas active
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            //Récupération et nettoyage des données
            $email = trim(htmlspecialchars($_POST['email']));
            $password = trim($_POST['password']);

            //Vérification des champs obligatoires
            if (empty($email) || empty($password)) {
                die("Tous les champs doivent être remplis !");
            }

            //Connexion à la DB
            $db = Database::getInstance();

            //Vérification de l'email dans la DB
            $stmt = $db->prepare("SELECT id, username, password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            //Vérification du mot de passe 
            if ($user && password_verify($password, $user['password'])) {
                //L'authentification est réussie, démarrer la session
                $_SESSION['user'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];

                //Redirection vers la page d'accueil
                header("Location: /");
                exit();
            } else {
                die("Identifiants incorrects !");
            }
        }
    }
}