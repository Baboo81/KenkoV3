<?php

namespace App\Controllers\Cookies;

use App\Core\Controller;

class CookiePreferencesController extends Controller
{
    public function show()
    {
        //Titre de la page
        $title = "Gestion des cookies";
        //Joindre les styles
        $resetCss = 'reset.css';
        $css = 'cookiePreferences.css';

        //Charger la vue et passer le titre ainsi que les styles
        $this->View('cookies/cookie-preferences', compact('title', 'resetCss', 'css'));
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier le token CSRF
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Erreur CSRF !");
            }

            // Récupérer les préférences du formulaire
            $preferences = [
                'analytics' => isset($_POST['analytics']),
                'marketing' => isset($_POST['marketing'])
            ];

            // Si l'utilisateur est connecté, stocker en base de données
            if (isset($_SESSION['user_id'])) {
                require_once __DIR__ . '/../../Core/Database.php';
                $db = new \App\Core\Database();
                $pdo = $db->getInstance();
                
                $stmt = $pdo->prepare("UPDATE users SET cookie_preferences = :preferences WHERE id = :id");
                $stmt->execute([
                    'preferences' => json_encode($preferences),
                    'id' => $_SESSION['user_id']
                ]);
            } else {
                // Sinon, stocker dans un cookie
                setcookie('cookie_preferences', json_encode($preferences), time() + 365 * 24 * 3600, "/");
            }

            // Rediriger avec un message de succès
            header("Location: /cookies/cookie-preferences?success=1");
            exit;
        }
    }
}