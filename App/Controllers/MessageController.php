<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Core\Mailer;
use PDO;

class MessageController extends Controller {

    public function showMessages() {
        // Connexion à la base de données
        $db = Database::getInstance();

        // Récupération des messages
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'message.css';

        // Affichage de la vue
        $this->View('message', compact('title', 'resetCss', 'css', 'messages'));
    }

    public function send() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sécurisation des données
            $nom     = htmlspecialchars(trim($_POST['name'] ?? ''));
            $prenom  = htmlspecialchars(trim($_POST['firstName'] ?? ''));
            $tel     = htmlspecialchars(trim($_POST['tel'] ?? ''));
            $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
            $message = htmlspecialchars(trim($_POST['message'] ?? ''));

            // Vérification des champs
            if (empty($nom) || empty($prenom) || empty($tel) || empty($email) || empty($message)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires !";
                header("Location: /contact");
                exit;
            }

            // Enregistrement en base de données
            $db = Database::getInstance();
            $stmt = $db->prepare("
                INSERT INTO contacts (nom, prenom, telephone, email, message, created_at)
                VALUES (?, ?, ?, ?, ?, NOW())
            ");
            $stmt->execute([$nom, $prenom, $tel, $email, $message]);

            // Capture du contenu HTML du mail depuis le template
            ob_start();
            include __DIR__ . '/../views/email/contact-message.php';
            $htmlMessage = ob_get_clean();

            // Envoi de l'email via Mailer
            $to = "magicbaboo@gmail.com";
            $subject = "Nouveau message de Kenko";

            $mailSent = Mailer::sendMail($to, $subject, $htmlMessage, $email);

            if ($mailSent) {
                echo "Email envoyé avec succès !";
            } else {
                echo "Echec de l'envoi";
            }

            exit;
        }
    }
}
