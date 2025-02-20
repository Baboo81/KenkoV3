<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class CookieController extends Controller 
{
    public function showBanner() 
    {
        //Afficher le banner des cookies
        $this->View('cookie-banner');
    }

    public function savePreferences()
    {
        //Vérifie si la session est déjà démarrée
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
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