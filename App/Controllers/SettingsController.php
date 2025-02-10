<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;

class SettingsController extends Controller {
    public function show(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //Vérifie si le user est bien connecté
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }

        //Nommer la page, joindre les styles
        $title = "Paramètres";
        $resetCss = 'reset.css';
        $css = 'settings.css';

        //Charger la vues et passer les données utilisateurs
        $user = $_SESSION['user'];
        $this->View('settings', compact('title', 'resetCss', 'css', 'user'));

    }

    public function settings() {
        session_start();

    // Vérifie si l'utilisateur est connecté
    if (!isset($_SESSION['user'])) {
        $_SESSION['message'] = [
            'type' => 'danger',
            'text' => 'Vous devez être connecté pour accéder aux paramètres.'
        ];
        header("Location: /login");
        exit();
    }

    // Vérifie si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérification du token CSRF
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'text' => 'Erreur CSRF, veuillez réessayer !'
            ];
            header("Location: /settings");
            exit();
        }

        // Connexion à la BD
        $db = new Database();
        $pdo = $db->getInstance();

        // Récupérer les données du formulaire
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $adress = htmlspecialchars($_POST['adress']);
        $city = htmlspecialchars($_POST['city']);
        $postal_code = htmlspecialchars($_POST['postal_code']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $country = htmlspecialchars($_POST['country']);
        $userId = $_SESSION['user']['id'];

        if (!$email) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'text' => 'Adresse email non valide !'
            ];
            header("Location: /settings");
            exit();
        }

        // Correction de la requête SQL (problème de virgule après 'country')
        $stmt = $pdo->prepare("UPDATE users SET lastname = ?, firstname = ?, adress = ?, city = ?, postal_code = ?, email = ?, country = ? WHERE id = ?");
        $stmt->execute([$lastname, $firstname, $adress, $city, $postal_code, $email, $country, $userId]);

        // Gestion de l'upload de l'avatar
        if (!empty($_FILES['avatar']['name'])) {
            $uploadDir = 'uploads/avatars/';
            $fileName = basename($_FILES['avatar']['name']);
            $uploadFile = $uploadDir . $fileName;

            // Vérifier si l'image est valide
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($_FILES['avatar']['type'], $allowedTypes)) {
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile)) {
                    $stmt = $pdo->prepare("UPDATE users SET avatar = ? WHERE id = ?");
                    $stmt->execute([$uploadFile, $userId]);

                    // Mettre à jour la session avec le nouvel avatar
                    $_SESSION['user']['avatar'] = $uploadFile;
                } else {
                    $_SESSION['message'] = [
                        'type' => 'danger',
                        'text' => 'Erreur lors du téléchargement de l\'avatar !'
                    ];
                    header("Location: /settings");
                    exit();
                }
            } else {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'text' => 'Format d\'image non autorisé ! Les formats autorisés sont : JPEG, PNG, GIF'
                ];
                header("Location: /settings");
                exit();
            }
        }

        // Mettre à jour la session avec les nouvelles informations utilisateur
        $_SESSION['user'] = array_merge($_SESSION['user'], [
            'lastname' => $lastname,
            'firstname' => $firstname,
            'adress' => $adress,
            'city' => $city,
            'postal_code' => $postal_code,
            'email' => $email,
            'country' => $country
        ]);

        // Ajouter un message de succès
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Vos paramètres ont été mis à jour avec succès !'
        ];

        // Redirection vers la page des paramètres
        header("Location: /settings");
        exit();
        }
    }
}