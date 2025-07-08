<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class MessageController extends Controller {

    public function showMessages() {
         //Se connecter à la BD
        $db  = Database::getInstance();

        //Récupèrer les msg de la db
        $stmt = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        $message = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Définir les variables pour la vue
        $title = "Messages reçus";
        $resetCss = 'reset.css';
        $css = 'message.css';

        //Charger la vue en lui passant ceci
        $this->View('message', compact('title', 'resetCss', 'css', 'messages'));
    }

    public function send() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Sécurisation des données
            $nom = htmlspecialchars(trim($_POST['name'] ?? ''));
            $prenom = htmlspecialchars(trim($_POST['firstName'] ?? ''));
            $tel = htmlspecialchars(trim($_POST['tel'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $message = htmlspecialchars(trim($_POST['message'] ?? ''));

            if (empty($nom) || empty($prenom) || empty($tel) || empty($email) || empty($message)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires !";
                header("Location: /contact");
                exit;
            }

            //Enregistrer dans la DB
            $db = Database::getInstance();
            $stmt = $db->prepare("INSERT INTO contacts (nom, prenom, telephone, email, message, created_at) VALUES (?, ?, ?, ?, ?, NOW()");
            $stmt->execute([$nom, $prenom, $tel, $email, $message]);

            //Envoi de l'email
            $to = "magicbaboo@gmail.com";
            $subject = "Nouveau message de Kenko";
            
            //Capture du template
            ob_start();
            include__DIR__ . '/../views/email/contact-message.php';
            $htmlMessage = ob_get_clean();

            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";

            if (mail($to, $subject, $htmlMessage, $headers)) {
                $_SESSION['success'] = "Merci, votre message à bien été envoyé !";
            } else {

            } $_SESSION['error'] = "Le message a bien été enregistrer, mais l'email n'a pas été envoyé !";

            header("Location: /contact");
            exit;
        }
    }
   


}