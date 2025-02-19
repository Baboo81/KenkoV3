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
        session_start();

        if ($_SESSION["REQUEST_METHOD"] === "POST") {
            $preferences = [
                'analytics' => isset($_POST['analytics']) ? true : false,
                'marketing' => isset($_POST['marketing']) ? true : false
            ];

            if (isset($_SESSION['user_id'])) {
                //Si le user est connecté, on stocke en DB
                $db = new Database();
                $pdo = $db->getInstance();

                $stmt = $db->prepare("UPDATE users SET cookie_preferences = :preferences WHERE id = :id");
                $stmt->execute([
                    'preferences' => json_encode($preferences),
                    'id' => $_SESSION['user_id']
                ]);
            } else {
                //Sinon, on stocke les préférences dans un cookie
                setcookie('cookie_preferences', json_encode($preferences), time() + 365 * 24 * 60 * 60, "/");
            }
        }
    }
}