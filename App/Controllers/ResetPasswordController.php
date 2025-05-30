<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class ResetPasswordController extends Controller {
    public function show() {
        //Définir le titre de la page
        $title = "Réinitialiser votre mot de passe";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'resetPassword.css';

        //Récupérer le token depuis l'URL
        $token = $_GET['token'] ?? null;

        //Charger la vue et passer les styles et le token
        $this->View('reset-password', compact('title', 'resetCss', 'css', 'token'));
    }

    public function reset() {
        //Vérifie que la requête est bien une requête POST (form soumis)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Récupère les données du form : le token et les 2 champs de mots de passe
            $token = $_POST['token'] ?? null;
            $newPassword = $_POST['password'] ?? null;
            $confirmPassword = $_POST['confirm_password'] ?? null;

            //Si le token est manquant ou si les mots de passes ne correspondent pas, redirection avec message d'erreur
            if (!$token || !$newPassword !== $confirmPassword) {
                header('Location: /reset-password?error=1');
                exit;
            }

            //Connexion à la DB
            $db = new Database();

            //Prépare la requête pour chercher le token dans la table : password_resets
            $sql = "SELECT user_id FROM password_resets WHERE token =:token LIMIT 1";
            $params = [':token' => $token];
            
            //Exècute la requête et récupère le résultat(associe le token à un user_id)
            $result = $db->query($sql, $params)->fetch();

            //Si aucun résultat (token invalide ou expiré), redirection avec message d'erreur
            if (!$result) {
                header('Location: /reset-password?error=1');
                exit;
            }

            //Si le token est valide, on récupère l'ID de l'utilisateur concerné
            $userId= $result['user_id'];

            //On chiffre le nouveau mot de passe pour le stocker en toute sécurité
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            //Mise à jour du mot de passe dans la table : users
            $sql = "UPDATE users SET password = :password WHERE id = :id";
            $db->query($sql, [
                ':password' => $hashedPassword,
                ':id' => $userId
            ]);

            //Suppression du token de la table (password_resets) afin d'éviter une réutilisation
            $sql = "DELETE FROM password_resets WHERE token = :token";
            $db->query($sql, [':token' => $token]);
            
            //redirection vers la page de connexion avec paramètre de succès
            header('Location: /login?reset_success=1');
            exit;
        }
    }
}