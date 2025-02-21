<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class CookieController extends Controller 
{
    public function showBanner() 
    {
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'cookie-banner.css';

        //Charger la vue ainsi que les styles
        $this->View('partials/cookie-banner', compact('resetCss', 'css'));
    }

    public function savePreferences()
    {
      
        //Démarrer une session : (une session permet de stocker des infos entre les requêtes HTTP, des variables utilisateur, des jetons CSRF ou des msg de confirmation)
        if (session_status() === PHP_SESSION_NONE) {
        session_start([
                'cookie_lifetime' => 86400, //Durée de vie du cookie de session = à un jour 
                'cookie_secure' => true, //Le cookie sera transmis uniquement en HTTPS
                'cookie_httponly' => true, //Empêche l'acces au cookie via JS
                'use_strict_mode' => true, //Oblige la régénération de l'ID de session pour éviter les attaques de fixation de session
            ]);
        //Regénérérer l'ID de session pour éviter les attaques par fixation de session
        session_regenerate_id(true);
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $preferences = [
                'analytics' => isset($_POST['analytics']) ? true : false,
                'marketing' => isset($_POST['marketing']) ? true : false
            ];

            if (isset($_SESSION['user_id'])) {
                //Si le user est connecté, on stocke en DB
                $db = new Database();
                $pdo = $db->getInstance();

                $stmt = $pdo->prepare("UPDATE users SET cookie_preferences = :preferences WHERE id = :id");
                $stmt->execute([
                    'preferences' => json_encode($preferences),
                    'id' => $_SESSION['user_id']
                ]);
            } else {
                //Sinon, on stocke les préférences dans un cookie
                setcookie('cookie_preferences', json_encode($preferences), time() + 365 * 24 * 60 * 60, "/");
            }

            //Redirection après enregistrement des préférences
            header("Location: cookie-preferences.php?success=1");
            exit();
        }
    }
}